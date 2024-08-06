<?php

use App\Models\Artist;
use function Pest\Livewire\livewire;
use App\Filament\Resources\ArtistResource\Pages\ListArtists;

it('links_to_the_filtered_lps', function () {
    $artist = Artist::factory()->count(2)->create();

    livewire(ListArtists::class)
       ->assertCanSeeTableRecords($artist) ;
});
