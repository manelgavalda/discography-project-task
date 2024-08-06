<?php

namespace App\Filament\Widgets;

use App\Models\LP;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class HomeReport extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                LP::query()->with('songs.authors')
            )
            ->columns([
                TextColumn::make('name')
                    ->label('LP')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('artist.name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('songs_count')
                    ->label('Songs')
                    ->counts('songs')
                    ->sortable(),
                TextColumn::make('author_names')
                    ->label('Authors'),
            ]);
    }
}
