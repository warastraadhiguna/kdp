<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use App\Models\TeamMember;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Intervention\Image\ImageManager;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Intervention\Image\Drivers\Gd\Driver;
use App\Filament\Resources\TeamMemberResource\Pages;
use Intervention\Image\Drivers\Gd\Encoders\JpegEncoder;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class TeamMemberResource extends Resource
{
    protected static ?string $model = TeamMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'Pengaturan Dasar';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama')
                    ->required(),
                TextInput::make('position')
                    ->label('Jabatan')
                    ->required(),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
                Textarea::make('quote')
                    ->label('Kutipan')
                    ->required(),
                TextInput::make('instagram')
                    ->label('Instagram'),
                TextInput::make('linkedin')
                    ->label('Linkedin'),
                TextInput::make('index')->label('Indeks (0 untuk tidak tampil)')->minValue(0)->required(),
                FileUpload::make('image')
                    ->label('Logo (254 x 289)')
                    ->image() // Validasi gambar
                    ->required()
                    ->maxSize(2048)
                    ->afterStateUpdated(function ($state, callable $set) {
                        if (!$state instanceof TemporaryUploadedFile) {
                            return;
                        }

                        $fileName = 'team_member_' . time() .  '.' . $state->getClientOriginalExtension();

                        $storedPath = $state->storePubliclyAs('images/team/', $fileName, 'public');

                        $publicPath = 'images/team/' . $fileName;
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
                                ->cover(254, 289)
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
                TextColumn::make('name')->label('Nama')->searchable(['nama']),
                TextColumn::make('position')->label('Jabatan'),
                TextColumn::make('email')->label('Email')->wrap(),
                ImageColumn::make('image')
                    ->label('Gambar')
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
            'index' => Pages\ListTeamMembers::route('/'),
            'create' => Pages\CreateTeamMember::route('/create'),
            'edit' => Pages\EditTeamMember::route('/{record}/edit'),
        ];
    }
}
