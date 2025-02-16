<?php

namespace App\Filament\Resources\BriefHistoryResource\Pages;

use App\Filament\Resources\BriefHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBriefHistories extends ListRecords
{
    protected static string $resource = BriefHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
