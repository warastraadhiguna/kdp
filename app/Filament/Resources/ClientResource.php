<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Client;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\ClientResource\Pages;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Encoders\JpegEncoder;
use Intervention\Image\ImageManager;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Intervention\Image\Drivers\Gd\Driver;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Pengaturan Dasar';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nama')->required(),
                TextInput::make('index')->label('Indeks')->minValue(0)->required(),
                FileUpload::make('image')
                    ->label('Logo (301 x 122)')
                    // ->directory('images/clients')
                    ->image() // Validasi gambar
                    ->required()
                    ->maxSize(2048)
                    ->afterStateUpdated(function ($state, callable $set) {
                        if (!$state instanceof TemporaryUploadedFile) {
                            return;
                        }

                        $fileName = 'client' . time() .  '.' . $state->getClientOriginalExtension();

                        $storedPath = $state->storePubliclyAs('images/clients/', $fileName, 'public');

                        $publicPath = 'images/clients/' . $fileName;
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
                                ->cover(206, 27)
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
                TextColumn::make('name')->label('Nama')->searchable(['name']),
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
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Client';
    }

    public static function getModelLabel(): string
    {
        return __('Client'); // Label singular
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Client'); // Label plural
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->role  === 'admin'; // ✅ Hanya admin yang bisa melihat
    }
}
