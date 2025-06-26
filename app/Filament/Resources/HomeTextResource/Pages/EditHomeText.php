<?php

namespace App\Filament\Resources\HomeTextResource\Pages;

use App\Filament\Resources\HomeTextResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditHomeText extends EditRecord
{
    protected static string $resource = HomeTextResource::class;

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
        return HomeTextResource::getModel()::findOrFail(1); // Paksa hanya bisa edit ID 1
    }
}