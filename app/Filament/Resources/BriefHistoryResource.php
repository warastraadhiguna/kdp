<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\BriefHistory;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\BriefHistoryResource\Pages;

class BriefHistoryResource extends Resource
{
    protected static ?string $model = BriefHistory::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationGroup = 'Pengaturan Web';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('year')->label('Tahun')->required(),
                Textarea::make('note')
                    ->label('Keterangan')
                    ->required(),
                FileUpload::make('image')
                    ->label('Gambar (800 x 420)')
                    ->directory('images/brief-histories') // Direktori penyimpanan di `storage/app/public`
                    ->image() // Validasi gambar
                    ->maxSize(2048),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('year')->label('Tahun')->searchable(['name']),
                TextColumn::make('note')->label('Keterangan')->wrap(),
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->size(50), // Ukuran gambar
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
            'index' => Pages\ListBriefHistories::route('/'),
            'create' => Pages\CreateBriefHistory::route('/create'),
            'edit' => Pages\EditBriefHistory::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->role === 'admin'; // ✅ Hanya admin yang bisa melihat
    }

    public static function getNavigationLabel(): string
    {
        return 'Brief History';
    }

    public static function getModelLabel(): string
    {
        return __('Brief History'); // Label singular
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Brief History'); // Label pluSekolah
    }
}
