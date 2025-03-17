<?php

namespace App\Filament\Resources;

use App\Models\GalleryCategory;
use Filament\Tables;
use App\Models\Gallery;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\GalleryResource\Pages;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Pengaturan Gallery';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('gallery_category_id')
                    ->label('Category')
                    ->relationship('galleryCategory', 'title')
                    ->options(fn () => GalleryCategory::where('index', '>', '0')->pluck('title', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('title')->label('Judul')->required(),
                FileUpload::make('image')
                    ->label('Gambar')
                    ->directory('images/gallery') // Direktori penyimpanan di `storage/app/public`
                    ->image() // Validasi gambar
                    ->maxSize(2048)
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordUrl(fn ($record) => null)
            ->columns([
                TextColumn::make('galleryCategory.title')->label('Kategori')->sortable(['gallery_categories.title']),
                TextColumn::make('title')->label('Judul')->searchable(['title']),
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
            ])
            ->defaultSort("galleryCategory.title");
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->role === 'admin'; // ✅ Hanya admin yang bisa melihat
    }

    public static function getNavigationLabel(): string
    {
        return 'Gallery';
    }

    public static function getModelLabel(): string
    {
        return __('Gallery'); // Label singular
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Gallery'); // Label pluSekolah
    }
}
