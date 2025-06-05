<?php

namespace App\Filament\Resources\IndustriResource\Pages;

use App\Filament\Resources\IndustriResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIndustri extends CreateRecord
{
    protected static string $resource = IndustriResource::class;
protected function getHeaderActions(): array
    {
        // Ini akan secara otomatis memunculkan tombol "Create"
        return parent::getHeaderActions();
    }

    protected function getFormActions(): array
    {
        return parent::getFormActions();
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}