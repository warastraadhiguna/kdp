<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CounterResource\Pages;
use App\Filament\Resources\CounterResource\RelationManagers;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class CounterResource extends Resource
{
    protected static ?string $model = Company::class;
    protected static ?string $navigationGroup = 'Home';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Counter 1')
                ->schema([
                    TextInput::make('title_counter1')
                        ->label('Judul 1')
                        ->required(),
                    TextInput::make('total_counter1')
                        ->label('Total 1')
                        ->minValue(0)
                        ->required(),
                    TextInput::make('note_counter1')
                        ->label('Note 1')
                        ->required(),
                ]),  

                Section::make('Counter 2')
                ->schema([
                    TextInput::make('title_counter2')
                        ->label('Judul 2')
                        ->required(),
                    TextInput::make('note_counter2')
                        ->label('Note 2')
                        ->required(),
                    TextInput::make('total_counter2')
                        ->label('Total 2')
                        ->minValue(0)
                        ->required(),
                ]),
                
                Section::make('Counter 3')
                ->schema([
                    TextInput::make('title_counter3')
                        ->label('Judul 3')
                        ->required(),
                    TextInput::make('note_counter3')
                        ->label('Note 3')
                        ->required(),
                    TextInput::make('total_counter3')
                        ->label('Total 3')
                        ->minValue(0)
                        ->required(),
                ]),
                     
                Toggle::make('show_counter_info')
                ->label('Tampilkan Informasi counter')
                ->onColor('success')
                ->offColor('danger')
                ->required()
                ->dehydrateStateUsing(fn (bool $state) => $state ? 'y' : 'n')
                ->afterStateHydrated(fn ($state, $set) => $set('show_counter_info', $state === 'y')),
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
            'index' => Pages\ListCounters::route('/'),
            // 'create' => Pages\CreateCounter::route('/create'),
            'edit' => Pages\EditCounter::route('/{record}/edit'),
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
        return 'Counter';
    }

    public static function getModelLabel(): string
    {
        return __('Counter');  
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Counter');  
    }    
}