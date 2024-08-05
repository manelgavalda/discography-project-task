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
        Artist::factory()->createMany([
            [
                'name' => 'Metallica',
                'description' => 'An American heavy metal band formed in 1981 in Los Angeles, California.',
            ],
            [
                'name' => 'Iron Maiden',
                'description' => 'An English heavy metal band formed in Leyton, East London, in 1975.',
            ],
            [
                'name' => 'Black Sabbath',
                'description' => 'An English rock band, formed in Birmingham in 1968, widely regarded as pioneers of heavy metal music.',
            ],
            [
                'name' => 'Megadeth',
                'description' => 'An American heavy metal band formed in 1983 in Los Angeles, California.',
            ],
            [
                'name' => 'Slayer',
                'description' => 'An American thrash metal band from Huntington Park, California, formed in 1981.',
            ],
        ]);
    }
}
