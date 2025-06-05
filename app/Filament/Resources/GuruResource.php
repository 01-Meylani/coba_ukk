<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuruResource\Pages;
use App\Models\Guru;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GuruResource extends Resource
{
    protected static ?string $model = Guru::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('nip')
                    ->label('NIP')
                    ->required()
                    ->maxLength(100)
                    ->unique(ignoreRecord: true, column: 'nip', table: 'gurus')
                    ->validationMessages([
                        'unique' => 'NIP sudah dipakai.',
                    ]),

                Forms\Components\Select::make('gender')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required()
                    ->label('Jenis Kelamin'),

                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('kontak')
    ->label('Kontak')
    ->required()
    ->maxLength(20)
    ->dehydrateStateUsing(function ($state) {
        if (str_starts_with($state, '08')) {
            return '+62' . substr($state, 1);
        }

        return $state;
    })
    ->formatStateUsing(function ($state) {
        // untuk ditampilkan kembali di input
        return $state;
    }),


               Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true, column: 'email', table: 'gurus')
                ->validationMessages([
                    'unique' => 'Email sudah digunakan.',
                ])
                //untuk mengedit email akan otomatis terupdate dimenu user
    ->afterStateUpdated(function ($state, $record) {
        $oldEmail = $record->getOriginal('email');
        if ($oldEmail !== $state) {
            \App\Models\User::where('email', $oldEmail)->update(['email' => $state]);
        }
    }),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('nip')
                    ->label('NIP')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('gender')
                    ->label('Jenis Kelamin')
                    ->sortable(),

                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat'),

                Tables\Columns\TextColumn::make('kontak')
                    ->label('Kontak')
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGurus::route('/'),
            'create' => Pages\CreateGuru::route('/create'),
            'edit' => Pages\EditGuru::route('/{record}/edit'),
        ];
    }
}
