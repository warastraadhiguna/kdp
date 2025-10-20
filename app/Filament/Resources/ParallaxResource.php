<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParallaxResource\Pages;
use App\Models\Company;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Tables\Table;
use Intervention\Image\Drivers\Gd\Encoders\JpegEncoder;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ParallaxResource extends Resource
{
    protected static ?string $model = Company::class;
    protected static ?string $navigationGroup = 'Home';
    protected static ?string $navigationIcon = 'heroicon-o-code-bracket-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('parallax_text1')
                ->label('Teks 1')
                ->required(),
                TextInput::make('parallax_text2')
                ->label('Teks 2')
                ->required(),

                FileUpload::make('parallax_image')
                ->label('Parallax Image (1920x751)')
                // ->directory('images')
                ->image()
                ->maxSize(2048)
                // ->getUploadedFileNameForStorageUsing(fn () => 'parallax.png')
                ->required()
            ->afterStateUpdated(function ($state, callable $set) {
                if (!$state instanceof TemporaryUploadedFile) {
                    return;
                }

                $fileName = 'parallax' . time() .  '.' . $state->getClientOriginalExtension();

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
                        ->cover(1920, 751)
                        ->encode(new JpegEncoder(quality: 80));
                    Storage::disk('public')->put($publicPath, (string) $image);
                    $set('parallax_image', [$publicPath]);
                } catch (\Exception $e) {
                    dd("Error memproses gambar: " . $e->getMessage());
                }
            }),
            Toggle::make('show_parallax_info')
            ->label('Tampilkan Informasi Parallax')
            ->onColor('success')
            ->offColor('danger')
            ->required()
            ->dehydrateStateUsing(fn (bool $state) => $state ? 'y' : 'n')
            ->afterStateHydrated(fn ($state, $set) => $set('show_parallax_info', $state === 'y')),

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
            'index' => Pages\ListParallaxes::route('/'),
            // 'create' => Pages\CreateParallax::route('/create'),
            'edit' => Pages\EditParallax::route('/{record}/edit'),
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
        return 'Parallax';
    }

    public static function getModelLabel(): string
    {
        return __('Parallax');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Parallax');
    }

}
