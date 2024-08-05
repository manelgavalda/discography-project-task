<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artistsData = [
            [
                'name' => 'Metallica',
                'description' => 'An American heavy metal band formed in 1981 in Los Angeles, California.',
                'lps' => [
                    ['name' => 'Kill \'Em All', 'description' => 'Debut studio album released in 1983.'],
                    ['name' => 'Ride the Lightning', 'description' => 'Second studio album released in 1984.'],
                ],
            ],
            [
                'name' => 'Iron Maiden',
                'description' => 'An English heavy metal band formed in Leyton, East London, in 1975.',
                'lps' => [
                    ['name' => 'The Number of the Beast', 'description' => 'Third studio album released in 1982.'],
                    ['name' => 'Powerslave', 'description' => 'Fifth studio album released in 1984.'],
                ],
            ],
            [
                'name' => 'Black Sabbath',
                'description' => 'An English rock band, formed in Birmingham in 1968, widely regarded as pioneers of heavy metal music.',
                'lps' => [
                    ['name' => 'Paranoid', 'description' => 'Second studio album released in 1970.'],
                    ['name' => 'Master of Reality', 'description' => 'Third studio album released in 1971.'],
                ],
            ],
            [
                'name' => 'Megadeth',
                'description' => 'An American heavy metal band formed in 1983 in Los Angeles, California.',
                'lps' => [
                    ['name' => 'Peace Sells... but Who\'s Buying?', 'description' => 'Second studio album released in 1986.'],
                    ['name' => 'Rust in Peace', 'description' => 'Fourth studio album released in 1990.'],
                ],
            ],
            [
                'name' => 'Slayer',
                'description' => 'An American thrash metal band from Huntington Park, California, formed in 1981.',
                'lps' => [
                    ['name' => 'Reign in Blood', 'description' => 'Third studio album released in 1986.'],
                    ['name' => 'South of Heaven', 'description' => 'Fourth studio album released in 1988.'],
                ],
            ],
        ];

        foreach ($artistsData as $artistData) {
            $artist = Artist::factory()->create([
                'name' => $artistData['name'],
                'description' => $artistData['description'],
            ]);

            $artist->lps()->createMany($artistData['lps']);
        }
    }
}
