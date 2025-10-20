<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\AboutSlider;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Intervention\Image\Drivers\Gd\Driver;
use App\Filament\Resources\AboutSliderResource\Pages;
use Intervention\Image\Drivers\Gd\Encoders\JpegEncoder;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class AboutSliderResource extends Resource
{
    protected static ?string $model = AboutSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-right-circle';
    protected static ?string $navigationGroup = 'Pengaturan About';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Judul')->required(),
                TextInput::make('index')->label('Indeks')->minValue(0)->required(),
                FileUpload::make('image')
                    ->label('Gambar (1920  x 465)')
                    // ->directory('images/sliders') // Direktori penyimpanan di `storage/app/public`
                    ->image() // Validasi gambar
                    ->required()
                    ->maxSize(2048)
                    ->afterStateUpdated(function ($state, callable $set) {
                        if (!$state instanceof TemporaryUploadedFile) {
                            return;
                        }

                        $fileName = 'slider' . time() .  '.' . $state->getClientOriginalExtension();

                        $storedPath = $state->storePubliclyAs('images/sliders/', $fileName, 'public');

                        $publicPath = 'images/sliders/' . $fileName;
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
                TextColumn::make('title')->label('Judul')->searchable(['title', 'note']),
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
            'index' => Pages\ListAboutSliders::route('/'),
            'create' => Pages\CreateAboutSlider::route('/create'),
            'edit' => Pages\EditAboutSlider::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'About Slider';
    }

    public static function getModelLabel(): string
    {
        return __('About Slider'); // Label singular
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data About Slider'); // Label plural
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->role  === 'admin'; // ✅ Hanya admin yang bisa melihat
    }
}
