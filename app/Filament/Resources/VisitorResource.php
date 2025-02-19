<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Visitor;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\VisitorResource\Pages;

class VisitorResource extends Resource
{
    protected static ?string $model = Visitor::class;

    protected static ?string $navigationIcon = 'heroicon-o-eye';

    protected static ?string $navigationGroup = 'Pengaturan Dasar';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('ip_address')->label('IP Address')->searchable(['ip_address']),
                TextColumn::make('user_agent')->label('Informasi')->wrap(),
                TextColumn::make('city')->label('Kota')->wrap(),
                TextColumn::make('country')->label('Negara')->wrap(),
                TextColumn::make('created_at')->label('Tanggal Kunjungan'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListVisitors::route('/'),
            // 'create' => Pages\CreateVisitor::route('/create'),
            // 'edit' => Pages\EditVisitor::route('/{record}/edit'),
        ];
    }
}
