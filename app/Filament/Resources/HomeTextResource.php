<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeTextResource\Pages;
use App\Filament\Resources\HomeTextResource\RelationManagers;
use App\Models\Company;
use App\Models\HomeText;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class HomeTextResource extends Resource
{
    protected static ?string $model = Company::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Home';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('vision_mission_text')->label('Vision Mission')->required(),
                TextInput::make('about_us_text')->label('About Us')->required(),
                TextInput::make('our_team_text')->label('Our Team')->required(),
                TextInput::make('client_text')->label('Client')->required(),
                TextInput::make('project_text')->label('Project')->required(),
                TextInput::make('news_text')->label('News')->required(),
                TextInput::make('contact_us_text')->label('Contact Us')->required(),                                                                                                
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
            'index' => Pages\ListHomeTexts::route('/'),
            // 'create' => Pages\CreateHomeText::route('/create'),
            'edit' => Pages\EditHomeText::route('/{record}/edit'),
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
        return 'Home Text';
    }

    public static function getModelLabel(): string
    {
        return __('Home Text');  
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Home Text');  
    }        
}