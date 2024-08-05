<?php

use App\Models\LP;
use App\Models\Artist;

test('it_has_many_lps', function () {
    $artist = Artist::factory()->create();

    $artist->lps()->createMany(
        LP::factory()->count(2)->raw()
    );

    expect($artist->lps()->count())->toBe(2);
});
