<?php

namespace App\Filament\Resources\ParallaxResource\Pages;

use App\Filament\Resources\ParallaxResource;
use Filament\Actions\Action;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\EditRecord;

class EditParallax extends EditRecord
{
    protected static string $resource = ParallaxResource::class;


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
        return ParallaxResource::getModel()::findOrFail(1); // Paksa hanya bisa edit ID 1
    }
}