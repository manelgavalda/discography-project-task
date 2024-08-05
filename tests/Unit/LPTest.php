<?php

use App\Models\LP;
use App\Models\Artist;

test('lp_belongs_to_artist', function () {
    $lp = LP::factory()->create([
        'artist_id' => Artist::factory()->create()
    ]);

    expect($lp->artist()->exists())->toBeTrue();
});
