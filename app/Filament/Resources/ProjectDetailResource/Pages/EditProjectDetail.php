<?php

namespace App\Filament\Resources\ProjectDetailResource\Pages;

use App\Filament\Resources\ProjectDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectDetail extends EditRecord
{
    protected static string $resource = ProjectDetailResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah create
        return $this->getResource()::getUrl('index');
    }
}
