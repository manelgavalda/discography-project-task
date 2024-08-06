<?php

use App\Models\LP;
use App\Models\Artist;
use function Pest\Livewire\livewire;
use App\Filament\Resources\LPResource\Pages\ListLPS;

it('can_be_filtered_by_artist', function () {
    $lps = LP::factory()->count(2)->create([
        'artist_id' => Artist::factory()->create(['name' => 'Megadeth'])
    ]);

    LP::factory()->count(3)->create([
        'artist_id' => Artist::factory()->create(['name' => 'Metallica'])
    ]);

    livewire(ListLPS::class)
        ->assertCountTableRecords(5);

    livewire(ListLPS::class, ['tableSearch' => 'Megadeth'])
        ->assertCountTableRecords(2)
        ->assertCanSeeTableRecords($lps);
});
