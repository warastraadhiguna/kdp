<?php

namespace App\Filament\Resources;

use App\Models\Company;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\CompanyResource\Pages;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;
    protected static ?string $navigationGroup = 'Pengaturan Dasar';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2) // Menjadikan form memiliki 2 kolom
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->columnSpan(2) // Agar file upload lebar penuh
                            ->required(),
                        TextInput::make('application_name')
                            ->label('Nama Aplikasi')
                            ->required(),
                        TextInput::make('tagline')
                            ->label('Tagline')
                            ->required(),
                        Textarea::make('address')
                            ->label('Alamat')
                            ->required(),
                        TextInput::make('city')
                            ->label('Kota')
                            ->required(),
                        Textarea::make('google_map_embed')
                            ->label('Google Map Embed')
                            ->required(),
                        TextInput::make('phone')
                            ->label('No Telepon')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email')
                            ->required(),
                        DatePicker::make('establishment_date')
                            ->label('Establishment Date')
                            ->required(),
                        TextInput::make('linkedin')
                            ->label('LinkedIn'),
                        TextInput::make('youtube')
                            ->label('Youtube'),
                        FileUpload::make('icon')
                            ->label('Icon')
                            ->directory('images')
                            ->image()
                            ->maxSize(2048)
                            ->getUploadedFileNameForStorageUsing(fn () => 'icon.png')
                            ->required(),
                        FileUpload::make('image')
                            ->label('Logo')
                            ->directory('images')
                            ->image()
                            ->maxSize(2048)
                            ->getUploadedFileNameForStorageUsing(fn () => 'logo.png')
                            ->required(),
                        FileUpload::make('breadcrumb_image')
                            ->label('Gambar Background Halaman')
                            ->directory('images')
                            ->image()
                            ->maxSize(2048)
                            ->getUploadedFileNameForStorageUsing(fn () => 'breadcrumb.png')
                            ->required(),
                        FileUpload::make('parallax_image')
                            ->label('Parallax Image (1920x751)')
                            ->directory('images')
                            ->image()
                            ->maxSize(2048)
                            ->getUploadedFileNameForStorageUsing(fn () => 'parallax.png')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return
            $table
                ->columns([

                ]);
        // ->filters([
        //     //
        // ]);
        // ->actions([
        //     Tables\Actions\EditAction::make(),
        // ])
        // ->bulkActions([
        //     Tables\Actions\BulkActionGroup::make([
        //         Tables\Actions\DeleteBulkAction::make(),
        //     ]),
        // ]);
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
            'index' => Pages\ListCompanies::route('/'),
           // 'create' => Pages\CreateCompany::route('/create'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
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
        return 'Perusahaan';
    }

    public static function getModelLabel(): string
    {
        return __('Perusahaan'); // Label singular
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Perusahaan'); // Label pluSekolah
    }

}
