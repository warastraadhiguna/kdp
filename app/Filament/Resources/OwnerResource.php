<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Owner;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Intervention\Image\Drivers\Gd\Encoders\PngEncoder;
use Intervention\Image\Encoders\JpegEncoder;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\OwnerResource\Pages;
use Intervention\Image\Drivers\Gd\Driver;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class OwnerResource extends Resource
{
    protected static ?string $model = Owner::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Pengaturan Dasar';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nama')->required(),
                TextInput::make('index')->label('Indeks')->minValue(0)->required(),
                Textarea::make('note')
                    ->label('Keterangan'),
                FileUpload::make('image')
                    ->label('Logo (430 x 401)')
                    ->directory('images/Owners') // Direktori penyimpanan di `storage/app/public`
                    ->image() // Validasi gambar
                    ->required()
                    ->maxSize(2048)
                    // ->getUploadedFileNameForStorageUsing(fn ($file) => 'owner_' . time() . '.' . $file->getClientOriginalExtension()) // Nama unik
    ->afterStateUpdated(function ($state, callable $set) {
        if (!$state instanceof TemporaryUploadedFile) {
            return;
        }

        // **1. Simpan file langsung ke storage publik**
        $fileName = 'owner_' . time() . '.' . $state->getClientOriginalExtension();

        $storedPath = $state->storePubliclyAs('images/Owners', $fileName, 'public');


        // **2. Dapatkan path asli file di storage publik**
        $publicPath = 'images/Owners/' . $fileName;
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
                ->cover(430, 401) // Resize ke 430x401 px
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
                TextColumn::make('name')->label('Nama')->searchable(['name']),
                TextColumn::make('note')->label('Keterangan')->wrap(),
                TextColumn::make('index')->label('Indeks'),
                ImageColumn::make('image')
                    ->label('Logo')
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
            ])
            ->defaultSort("index");
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
            'index' => Pages\ListOwners::route('/'),
            'create' => Pages\CreateOwner::route('/create'),
            'edit' => Pages\EditOwner::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Owner';
    }

    public static function getModelLabel(): string
    {
        return __('Owner'); // Label singular
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Owner'); // Label plural
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->role  === 'admin'; // ✅ Hanya admin yang bisa melihat
    }
}
