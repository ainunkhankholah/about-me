<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('features')
                    ->columnSpanFull(),
                TextInput::make('technologies'),
                Textarea::make('impact')
                    ->columnSpanFull(),
                FileUpload::make('screenshot')
                    ->label('Project')
                    ->image()
                    ->disk('public')
                    ->directory('Project')
                    ->visibility('public'),
                TextInput::make('url')
                    ->url(),
            ]);
    }
}
