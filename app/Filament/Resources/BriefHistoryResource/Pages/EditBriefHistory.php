<?php

namespace App\Filament\Resources\BriefHistoryResource\Pages;

use App\Filament\Resources\BriefHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBriefHistory extends EditRecord
{
    protected static string $resource = BriefHistoryResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah create
        return $this->getResource()::getUrl('index');
    }
}
