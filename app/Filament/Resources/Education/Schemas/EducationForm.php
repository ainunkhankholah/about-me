<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('degree')
                    ->required(),
                TextInput::make('institution')
                    ->required(),
                TextInput::make('start_year')
                    ->required()
                    ->numeric(),
                TextInput::make('end_year')
                    ->numeric(),
                Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }
}
