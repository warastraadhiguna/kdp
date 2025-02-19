<?php

namespace App\Filament\Resources;

use App\Models\Blog;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Intervention\Image\Drivers\Gd\Driver;
use Filament\Tables\Columns\BooleanColumn;
use App\Filament\Resources\BlogResource\Pages;
use Intervention\Image\Drivers\Gd\Encoders\JpegEncoder;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Pengaturan Web';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                Textarea::make('summary')
                    ->label('Rangkuman')
                    ->required(),
                TextInput::make('index')->label('Indeks (0 untuk tidak tampil)')->minValue(0)->required(),
                FileUpload::make('image')
                    ->label('Logo (1320 x 600)')
                    ->directory('images/blogs') // Direktori penyimpanan di `storage/app/public`
                    ->image() // Validasi gambar
                    ->required()
                    ->maxSize(2048)
                    ->afterStateUpdated(function ($state, callable $set) {
                        if (!$state instanceof TemporaryUploadedFile) {
                            return;
                        }

                        // **1. Simpan file asli ke storage publik**
                        $fileName = 'blog_' . time() . '.' . $state->getClientOriginalExtension();
                        $thumbnailName = 'blog_' . time() . '_thumbnail.' . $state->getClientOriginalExtension();

                        $storedPath = $state->storePubliclyAs('images/blogs', $fileName, 'public');
                        $publicPath = 'images/blogs/' . $fileName;
                        $thumbnailPath = 'images/blogs/' . $thumbnailName;

                        // **2. Pastikan file ada di storage**
                        $storagePath = Storage::disk('public')->path($publicPath);
                        if (!Storage::disk('public')->exists($publicPath)) {
                            dd("File tidak ditemukan setelah disimpan: " . $storagePath);
                        }

                        // **3. Gunakan realpath() untuk validasi**
                        $realPath = realpath($storagePath);
                        if (!$realPath) {
                            dd("Path tidak valid: " . $storagePath);
                        }

                        // **4. Validasi apakah file benar-benar gambar**
                        $mimeType = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $realPath);
                        if (!in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif', 'image/webp'])) {
                            dd("file bukan gambar yang valid");
                        }

                        // **5. Inisialisasi ImageManager dengan driver GD**
                        $manager = new ImageManager(new Driver());

                        try {
                            // **6. Resize gambar utama ke 1320 x 600**
                            $mainImage = $manager->read($realPath)
                                ->cover(1320, 600)
                                ->encode(new JpegEncoder(quality: 80));

                            // **7. Simpan gambar utama yang sudah di-resize**
                            Storage::disk('public')->put($publicPath, (string) $mainImage);

                            // **8. Resize gambar thumbnail ke 420 x 346**
                            $thumbnailImage = $manager->read($realPath)
                                ->cover(420, 346)
                                ->encode(new JpegEncoder(quality: 80));

                            // **9. Simpan gambar thumbnail dengan nama yang sama + `_thumbnail`**
                            Storage::disk('public')->put($thumbnailPath, (string) $thumbnailImage);

                            // **10. Simpan path gambar utama & thumbnail ke database**
                            $set('image', [
                                'main' => $publicPath,
                                'thumbnail' => $thumbnailPath,
                            ]);

                        } catch (\Exception $e) {
                            dd("Error memproses gambar: " . $e->getMessage());
                        }
                    }),
                RichEditor::make('content')
                    ->label('Konten')
                    ->columnSpan('full')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordUrl(fn ($record) => null)
            ->columns([
                ImageColumn::make('image')->label('Gambar'),
                TextColumn::make('title')->label('Judul')->sortable()->searchable(),
                TextColumn::make('index')->label('Indeks'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }



    public static function getNavigationLabel(): string
    {
        return 'Blog';
    }

    public static function getModelLabel(): string
    {
        return __('Blog'); // Label singular
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Blog'); // Label plural
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->role  === 'admin'; // ✅ Hanya admin yang bisa melihat
    }
}
