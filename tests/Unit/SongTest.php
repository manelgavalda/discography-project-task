<?php

use App\Models\Song;
use App\Models\Author;

test('it_belongs_to_many_authors', function () {
    $song = Song::factory()->create();

    $song->authors()->createMany(
        Author::factory()->count(3)->raw()
    );

    expect($song->authors()->count())->toBe(3);
});
