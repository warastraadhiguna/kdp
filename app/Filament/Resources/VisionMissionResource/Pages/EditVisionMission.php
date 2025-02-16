<?php

namespace App\Filament\Resources\VisionMissionResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\AboutUsResource;
use App\Filament\Resources\VisionMissionResource;

class EditVisionMission extends EditRecord
{
    protected static string $resource = VisionMissionResource::class;

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
        return AboutUsResource::getModel()::findOrFail(1); // Paksa hanya bisa edit ID 1
    }
}
