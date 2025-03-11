<?php

namespace App\Filament\Resources;

use App\Models\ProjectCategory;
use Filament\Tables;
use App\Models\Owner;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Intervention\Image\Drivers\Gd\Driver;
use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Client;
use Intervention\Image\Drivers\Gd\Encoders\JpegEncoder;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Pengaturan Project';
    public static function form(Form $form): Form
    {
        return $form
           ->schema([
                Select::make('project_category_id')
                    ->label('Category')
                    ->relationship('projectCategory', 'title')
                    ->options(fn () => ProjectCategory::where('index', '>', '0')->pluck('title', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('name')->label('Nama')->required(),
                Textarea::make('scope')->label('Ruang Lingkup')->required(),
                TextInput::make('location')->label('Location')->required(),
                Select::make('owner_id')
                    ->label('Owner')
                    ->relationship('owner', 'name')
                    ->options(fn () => Owner::where('index', '>', '0')->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Select::make('client_id')
                    ->label('Client')
                    ->relationship('client', 'name')
                    ->options(fn () => Client::where('index', '>', '0')->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('schedule')->label('Schedule')->required(),
                TextInput::make('index')->label('Indeks')->minValue(0)->required(),
                FileUpload::make('image')
                    ->label('Logo (645 x 600)')
                    ->directory('images/projects') // Direktori penyimpanan di `storage/app/public`
                    ->image() // Validasi gambar
                    ->required()
                    ->maxSize(2048)
                    ->afterStateUpdated(function ($state, callable $set) {
                        if (!$state instanceof TemporaryUploadedFile) {
                            return;
                        }

                        // **1. Simpan file langsung ke storage publik**
                        $fileName = 'owner_' . time() . '.' . $state->getClientOriginalExtension();

                        $storedPath = $state->storePubliclyAs('images/projects', $fileName, 'public');


                        // **2. Dapatkan path asli file di storage publik**
                        $publicPath = 'images/projects/' . $fileName;
                        $storagePath = Storage::disk('public')->path($publicPath);

                        // **3. Debugging: Pastikan file ada setelah disimpan**
                        if (!Storage::disk('public')->exists($publicPath)) {
                            dd("File tidak ditemukan setelah disimpan: " . $storagePath);
                        }

                        // **4. Gunakan realpath() untuk memastikan path benar**
                        $realPath = realpath($storagePath);
                        if (!$realPath) {
                            dd("Path tidak valid: " . $storagePath);
                        }

                        // **5. Pastikan file adalah gambar valid**
                        $mimeType = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $realPath);
                        if (!in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif', 'image/webp'])) {
                            // dd("File bukan gambar yang valid: " . $realPath . ' | MIME Type: " . $mimeType);
                            dd("file bukan gambar yang valid");
                        }

                        // **6. Inisialisasi ImageManager dengan driver GD**
                        $manager = new ImageManager(new Driver());

                        // **7. Resize menggunakan Intervention Image v3**
                        try {
                            $image = $manager->read($realPath)
                                ->cover(645, 600)
                                ->encode(new JpegEncoder(quality: 80)); // Encode sebagai JPG

                            // **8. Simpan ulang gambar yang sudah di-resize ke storage publik**
                            Storage::disk('public')->put($publicPath, (string) $image);

                            // **9. Simpan path gambar ke database**
                            $set('image', [$publicPath]);
                        } catch (\Exception $e) {
                            dd("Error memproses gambar: " . $e->getMessage());
                        }
                    }),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordUrl(fn ($record) => null)
            ->columns([
                TextColumn::make('projectCategory.title')->label('Kategori'),
                TextColumn::make('name')->label('Nama')->searchable(['name']),
                TextColumn::make('location')->label('Lokasi'),
                TextColumn::make('owner.name')->label('Owner'),
                TextColumn::make('client.name')->label('Client'),
                TextColumn::make('index')->label('Indeks'),
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->size(50), // Ukuran gambar
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Project';
    }

    public static function getModelLabel(): string
    {
        return __('Project'); // Label singular
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Project'); // Label plural
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->role  === 'admin'; // ✅ Hanya admin yang bisa melihat
    }
}
