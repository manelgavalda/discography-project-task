<?php

use App\Models\LP;
use App\Models\Song;

test('it_belongs_to_artist', function () {
    $lp = LP::factory()->create();

    expect($lp->artist()->exists())->toBeTrue();
});

test('it_has_many_songs', function () {
    $lp = LP::factory()->create();

    $lp->songs()->createMany(
        Song::factory()->count(3)->raw()
    );

    expect($lp->songs()->count())->toBe(3);
});
