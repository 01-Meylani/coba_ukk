<?php

namespace App\Filament\Resources\SiswaResource\Pages;

use App\Filament\Resources\SiswaResource;
use Filament\Actions;
use Filament\Actions\Action; // ⬅️ Tambahkan baris ini!
use Filament\Resources\Pages\ListRecords;

class ListSiswas extends ListRecords
{
    protected static string $resource = SiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('Lihat Jumlah')
                ->label('Jumlah Siswa')
                ->color('success')
                ->action(function () {
                    $jumlah = \App\Models\Siswa::count();
                    \Filament\Notifications\Notification::make()
                               ->title("Total siswa: {$jumlah}")
                               ->success()
                            ->send();

                }),
        ];
    }
}
