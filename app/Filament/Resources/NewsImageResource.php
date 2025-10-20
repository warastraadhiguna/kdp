<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsImageResource\Pages;
use App\Filament\Resources\NewsImageResource\RelationManagers;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Intervention\Image\Drivers\Gd\Encoders\JpegEncoder;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Auth;

class NewsImageResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Pengaturan Berita';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('blog_image')
                    ->label('Parallax Image (1920x465)')
                    // ->directory('images')
                    ->image()
                    ->maxSize(2048)
                    // ->getUploadedFileNameForStorageUsing(fn () => 'blog.png')
                    ->required()
                ->afterStateUpdated(function ($state, callable $set) {
                    if (!$state instanceof TemporaryUploadedFile) {
                        return;
                    }

                    $fileName = 'blog' . time() .  '.' . $state->getClientOriginalExtension();

                    $storedPath = $state->storePubliclyAs('images', $fileName, 'public');

                    $publicPath = 'images/' . $fileName;
                    $storagePath = Storage::disk('public')->path($publicPath);

                    if (!Storage::disk('public')->exists($publicPath)) {
                        dd("File tidak ditemukan setelah disimpan: " . $storagePath);
                    }

                    $realPath = realpath($storagePath);
                    if (!$realPath) {
                        dd("Path tidak valid: " . $storagePath);
                    }

                    $mimeType = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $realPath);
                    if (!in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif', 'image/webp'])) {
                        dd("file bukan gambar yang valid");
                    }

                    $manager = new ImageManager(new Driver());
                    try {
                        $image = $manager->read($realPath)
                            ->cover(1920, 465)
                            ->encode(new JpegEncoder(quality: 80));
                        Storage::disk('public')->put($publicPath, (string) $image);
                        $set('blog_image', [$publicPath]);
                    } catch (\Exception $e) {
                        dd("Error memproses gambar: " . $e->getMessage());
                    }
                }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListNewsImages::route('/'),
            // 'create' => Pages\CreateNewsImage::route('/create'),
            'edit' => Pages\EditNewsImage::route('/{record}/edit'),
        ];
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]); // Langsung ke halaman edit School ID 1
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->role === 'admin'; // ✅ Hanya admin yang bisa melihat
    }

    public static function getNavigationLabel(): string
    {
        return 'News Image';
    }

    public static function getModelLabel(): string
    {
        return __('News Image'); // Label singular
    }
}
