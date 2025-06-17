<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ProjectCategory;
use Filament\Resources\Resource;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\ProjectCategoryResource\Pages;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Drivers\Gd\Encoders\JpegEncoder;
use Intervention\Image\ImageManager;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProjectCategoryResource extends Resource
{
    protected static ?string $model = ProjectCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $navigationGroup = 'Pengaturan Project';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Judul')->required(),
                TextInput::make('index')->label('Indeks (0 untuk tidak tampil)')->minValue(0)->required(),                
                FileUpload::make(name: 'image')
                ->label('Thumbnail (645 x 600)')
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
                FileUpload::make('breadcrumb_image')
                ->label('Background (1920  x 465)')
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
                            ->cover(1920 , 465)
                            ->encode(new JpegEncoder(quality: 80)); // Encode sebagai JPG

                        // **8. Simpan ulang gambar yang sudah di-resize ke storage publik**
                        Storage::disk('public')->put($publicPath, (string) $image);

                        // **9. Simpan path gambar ke database**
                        $set('breadcrumb_image', [$publicPath]);
                    } catch (\Exception $e) {
                        dd("Error memproses gambar: " . $e->getMessage());
                    }
                }),  
                                
                TiptapEditor::make('introduction')
                    ->profile('default')
                    ->label('Pendahuluan (ditampilkan)')
                    ->columnSpan('full')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordUrl(fn ($record) => null)
            ->columns([
                TextColumn::make('title')->label('Judul')->searchable(['title']),
                ImageColumn::make('image')
                    ->label('Gambar Thumbnail')
                    ->size(50), // Ukuran gambar             
                ImageColumn::make('breadcrumb_image')
                    ->label('Gambar Bacground')
                    ->size(50), // Ukuran gambar                       
                TextColumn::make('index')->label('Indeks'),
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
            ])->defaultSort('index');
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
            'index' => Pages\ListProjectCategories::route('/'),
            'create' => Pages\CreateProjectCategory::route('/create'),
            'edit' => Pages\EditProjectCategory::route('/{record}/edit'),
        ];
    }
}