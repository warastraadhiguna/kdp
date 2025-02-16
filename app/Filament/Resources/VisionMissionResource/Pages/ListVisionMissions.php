<?php

namespace App\Filament\Resources\VisionMissionResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\VisionMissionResource;

class ListVisionMissions extends ListRecords
{
    protected static string $resource = VisionMissionResource::class;

    public function getHeaderActions(): array
    {
        return [
            Action::make('edit_vision_mission')
                ->label('Edit Vission Mission')
                ->icon('heroicon-o-pencil')
                ->url(static::getResource()::getUrl('edit', ['record' => 1])),
        ];
    }
}
