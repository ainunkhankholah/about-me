<?php

namespace App\Filament\Resources\Photos\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class PhotoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                FileUpload::make('image')
                    ->label('Photo')
                    ->image()
                    ->disk('public')
                    ->directory('photos')
                    ->visibility('public'),
                Textarea::make('desc')
                    ->columnSpanFull(),
            ]);
    }
}
