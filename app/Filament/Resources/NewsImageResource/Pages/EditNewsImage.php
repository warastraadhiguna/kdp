<?php

namespace App\Filament\Resources\NewsImageResource\Pages;

use App\Filament\Resources\NewsImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsImage extends EditRecord
{
    protected static string $resource = NewsImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
