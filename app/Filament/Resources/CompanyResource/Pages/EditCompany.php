<?php

namespace App\Filament\Resources\CompanyResource\Pages;

use Filament\Actions\Action;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\CompanyResource;

class EditCompany extends EditRecord
{
    protected static string $resource = CompanyResource::class;

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
        return CompanyResource::getModel()::findOrFail(1); // Paksa hanya bisa edit ID 1
    }
}
