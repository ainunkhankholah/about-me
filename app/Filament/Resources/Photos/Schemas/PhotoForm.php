<?php

namespace App\Filament\Resources\Photos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PhotoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                FileUpload::make('image')
                    ->image(),
                Textarea::make('desc')
                    ->columnSpanFull(),
            ]);
    }
}
