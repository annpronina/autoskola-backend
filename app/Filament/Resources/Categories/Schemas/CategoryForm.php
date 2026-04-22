<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nosaukums')
                    ->maxLength(255)
                    ->placeholder('Ievadiet kategorijas nosaukumu')
                    ->validationMessages([
                        'required' => 'Lūdzu, ievadiet kategorijas nosaukumu.',
                        'max' => 'Nosaukums nedrīkst pārsniegt 255 rakstzīmes.',
                    ])
                    ->required(),
                    
                Textarea::make('description')
                    ->label('Apraksts')
                    ->rows(4)
                    ->columnSpanFull()
                    ->maxLength(255)
                    ->placeholder('(Piemērs): Vieglie automobiļi līdz 3500kg un ar vietu skaitu līdz 8 personām (neiskaitot vadītāju)...')
                    ->validationMessages([
                        'max' => 'Apraksts nedrīkst pārsniegt 255 rakstzīmes.',
                    ]),
            ]);
    }
}
