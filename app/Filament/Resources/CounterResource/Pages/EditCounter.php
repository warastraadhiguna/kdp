<?php

namespace App\Filament\Resources\CounterResource\Pages;

use App\Filament\Resources\CounterResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditCounter extends EditRecord
{
    protected static string $resource = CounterResource::class;


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
        return CounterResource::getModel()::findOrFail(1); // Paksa hanya bisa edit ID 1
    }
}