<?php

namespace App\Filament\Resources\HomeTextResource\Pages;

use App\Filament\Resources\HomeTextResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeTexts extends ListRecords
{
    protected static string $resource = HomeTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
