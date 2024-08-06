<?php

use App\Models\LP;
use App\Models\Song;
use App\Models\Author;

test('it_belongs_to_an_artist', function () {
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

test('it_shows_the_author_names', function () {
    $lp = LP::factory()->create();

    expect($lp->authorNames)->toBe('No authors available for this LP');

    $songs = Song::factory()->count(3)->create([
        'l_p_id' => $lp->id
    ]);

    $songs->each(fn ($song, $key) => $song->authors()->sync(
        Author::factory()->createMany([
            ['name' => 'Author ' . $key],
            ['name' => 'Author ' . $key]
        ])->pluck('id')->toArray()
    ));

    expect($lp->fresh()->authorNames)->toBe('Author 0, Author 1, Author 2');
});
