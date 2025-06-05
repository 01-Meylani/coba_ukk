<?php

namespace App\Filament\Resources\GuruResource\Pages;

use App\Filament\Resources\GuruResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;

class ListGurus extends ListRecords
{
    protected static string $resource = GuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('lihatJumlahGuru')
                ->label('Jumlah Guru')
                ->color('success')
                ->action(function () {
                    $jumlah = \App\Models\Guru::count();

                    Notification::make()
                        ->title("Total guru: {$jumlah}")
                        ->success()
                        ->send();
                }),
        ];
    }
}
