<?php

namespace App\Filament\Resources\AboutUsResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AboutUsResource;

class ListAboutUs extends ListRecords
{
    protected static string $resource = AboutUsResource::class;

    public function getHeaderActions(): array
    {
        return [
            Action::make('edit_about_us')
                ->label('Edit About Us')
                ->icon('heroicon-o-pencil')
                ->url(static::getResource()::getUrl('edit', ['record' => 1])),
        ];
    }
}
