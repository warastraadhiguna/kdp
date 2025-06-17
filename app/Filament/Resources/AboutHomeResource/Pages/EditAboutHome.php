<?php

namespace App\Filament\Resources\AboutHomeResource\Pages;

use App\Filament\Resources\AboutHomeResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditAboutHome extends EditRecord
{
    protected static string $resource = AboutHomeResource::class;


    public function getHeaderActions(): array
    {
        return [

        ];
    }
    public function getBreadcrumbs(): array
    {
        return [];
    }
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save')
                ->color('primary')
                ->action('save'),

        ];
    }

    public function getRecord(): Model
    {
        return AboutHomeResource::getModel()::findOrFail(1); // Paksa hanya bisa edit ID 1
    }
}