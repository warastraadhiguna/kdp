<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Message;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\MessageResource\Pages;
use Filament\Tables\Actions\Action;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationGroup = 'Pengaturan Web';
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
            ->columns([
                TextColumn::make('first_name')->label('First Name')->searchable(['first_name', 'last_name', 'phone', 'email', 'subject']),
                TextColumn::make('last_name')->label('First Name'),
                TextColumn::make('phone')->label('Phone'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('subject')->label('Subject'),
                TextColumn::make('message')->label('Message')->wrap(),
                Tables\Columns\IconColumn::make('is_read')
                                    ->label('Dibaca')
                                    ->boolean(), // Menampilkan ikon centang atau silang
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('tandaiDibaca')
                    ->label('Tandai Dibaca')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn (Message $record) => $record->is_read === 0) // Hanya tampil jika belum dibaca
                    ->action(fn (Message $record) => $record->update(['is_read' => 1])),
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
            'index' => Pages\ListMessages::route('/'),
            // 'create' => Pages\CreateMessage::route('/create'),
            // 'edit' => Pages\EditMessage::route('/{record}/edit'),
        ];
    }
}
