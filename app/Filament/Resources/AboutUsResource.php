<?php

namespace App\Filament\Resources;

use App\Models\Company;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\AboutUsResource\Pages;

class AboutUsResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'Pengaturan Web';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Grid::make(1)
            ->schema([
                Textarea::make('about_us')
                    ->label('About Us')
                    ->required(),
                FileUpload::make('about_us_image')
                    ->label('Gambar About Us (820x626)')
                    ->directory('images')
                    ->image()
                    ->maxSize(2048)
                    ->getUploadedFileNameForStorageUsing(fn () => 'about_us.png')
                    ->required(),
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListAboutUs::route('/'),
            // 'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
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
        return 'About Us';
    }

    public static function getModelLabel(): string
    {
        return __('About Us'); // Label singular
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data About Us'); // Label pluSekolah
    }
}
