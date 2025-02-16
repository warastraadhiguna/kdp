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
use App\Filament\Resources\VisionMissionResource\Pages;

class VisionMissionResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-eye';
    protected static ?string $navigationGroup = 'Pengaturan Web';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Grid::make(1)
            ->schema([
                Textarea::make('vision')
                    ->label('Vision')
                    ->required(),
                Textarea::make('mission')
                    ->label('Mission')
                    ->required(),
                FileUpload::make('vision_mission_image')
                    ->label('Gambar Vision Mission (520x625)')
                    ->directory('images')
                    ->image()
                    ->maxSize(2048)
                    ->getUploadedFileNameForStorageUsing(fn () => 'vision_mission.png')
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
            'index' => Pages\ListVisionMissions::route('/'),
            // 'create' => Pages\CreateVisionMission::route('/create'),
            'edit' => Pages\EditVisionMission::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->role === 'admin'; // ✅ Hanya admin yang bisa melihat
    }

    public static function getNavigationLabel(): string
    {
        return 'Vision & Mission';
    }

    public static function getModelLabel(): string
    {
        return __('Vision & Mission'); // Label singular
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Vision & Mission'); // Label pluSekolah
    }

    public static function getNavigationUrl(): string
    {
        return static::getUrl('edit', ['record' => 1]); // Langsung ke halaman edit School ID 1
    }
}
