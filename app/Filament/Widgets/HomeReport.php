<?php

namespace App\Filament\Widgets;

use App\Models\Artist;
use App\Models\LP;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Contracts\Database\Eloquent\Builder;

class HomeReport extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                LP::query()
            )
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('artist.name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('songs_count')
                    ->counts('songs')
                    ->sortable(),
                TextColumn::make('author_names'),
            ]);
    }
}
