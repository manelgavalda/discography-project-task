<?php

use App\Models\Song;
use App\Models\Author;

test('it_has_many_songs', function () {
    $author = Author::factory()->create();

    $author->songs()->sync(
        Song::factory()->count(4)->create()->pluck('id')
    );

    expect($author->songs()->count())->toBe(4);
});
