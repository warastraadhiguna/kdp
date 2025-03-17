<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ProjectCategory;
use Filament\Resources\Resource;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\ProjectCategoryResource\Pages;

class ProjectCategoryResource extends Resource
{
    protected static ?string $model = ProjectCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $navigationGroup = 'Pengaturan Project';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Judul')->required(),
                TiptapEditor::make('introduction')
                    ->profile('default')
                    ->label('Pendahuluan (ditampilkan)')
                    ->columnSpan('full')
                    ->required(),
                TextInput::make('index')->label('Indeks (0 untuk tidak tampil)')->minValue(0)->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordUrl(fn ($record) => null)
            ->columns([
                TextColumn::make('title')->label('Judul')->searchable(['title']),
                TextColumn::make('introduction')->label('Pendahuluan')->wrap(),
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
            'index' => Pages\ListProjectCategories::route('/'),
            'create' => Pages\CreateProjectCategory::route('/create'),
            'edit' => Pages\EditProjectCategory::route('/{record}/edit'),
        ];
    }
}
