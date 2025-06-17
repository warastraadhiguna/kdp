<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutHomeResource\Pages;
use App\Models\Company; 
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class AboutHomeResource extends Resource
{
    protected static ?string $model = Company::class;
    protected static ?string $navigationGroup = 'Home';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('about_title1')->label('Judul 1'),       
                TextInput::make('about_link1')->label('Link 1'),     

                TextInput::make('about_title2')->label('Judul 2'),                    
                TextInput::make('about_link2')->label('Link 2'),     

                TextInput::make('about_title3')->label('Judul 3'),                   
                TextInput::make('about_link3')->label('Link 3'),     

                TextInput::make('about_title4')->label('Judul 4'),                      
                TextInput::make('about_link4')->label('Link 4'),     
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
            'index' => Pages\ListAboutHomes::route('/'),
            // 'create' => Pages\CreateAboutHome::route('/create'),
            'edit' => Pages\EditAboutHome::route('/{record}/edit'),
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
        return 'Home About';
    }

    public static function getModelLabel(): string
    {
        return __('Home About');  
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Home About');  
    }        
}