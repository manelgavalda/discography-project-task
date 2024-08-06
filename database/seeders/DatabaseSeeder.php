<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Author;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
        ]);

        $artistsData = [
            [
                'name' => 'Metallica',
                'description' => 'An American heavy metal band formed in 1981 in Los Angeles, California.',
                'lps' => [
                    [
                        'name' => 'Kill \'Em All',
                        'description' => 'Debut studio album released in 1983.',
                        'songs' => [
                            [
                                'name' => 'Hit the Lights',
                                'authors' => [
                                    ['name' => 'James Hetfield'],
                                    ['name' => 'Lars Ulrich']
                                ],
                            ],
                            [
                                'name' => 'The Four Horsemen',
                                'authors' => [
                                    ['name' => 'James Hetfield'],
                                    ['name' => 'Dave Mustaine']
                                ],
                            ],
                            [
                                'name' => 'Motorbreath',
                                'authors' => [
                                    ['name' => 'James Hetfield']
                                ],
                            ],
                        ],
                    ],
                    [
                        'name' => 'Ride the Lightning',
                        'description' => 'Second studio album released in 1984.',
                        'songs' => [
                            [
                                'name' => 'Fight Fire with Fire',
                                'authors' => [
                                    ['name' => 'James Hetfield'],
                                    ['name' => 'Lars Ulrich'],
                                    ['name' => 'Cliff Burton']
                                ],
                            ],
                            [
                                'name' => 'Ride the Lightning',
                                'authors' => [
                                    ['name' => 'James Hetfield'],
                                    ['name' => 'Lars Ulrich'],
                                    ['name' => 'Cliff Burton'],
                                    ['name' => 'Kirk Hammett']
                                ],
                            ],
                            [
                                'name' => 'For Whom the Bell Tolls',
                                'authors' => [
                                    ['name' => 'James Hetfield'],
                                    ['name' => 'Lars Ulrich'],
                                    ['name' => 'Cliff Burton']
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Iron Maiden',
                'description' => 'An English heavy metal band formed in Leyton, East London, in 1975.',
                'lps' => [
                    [
                        'name' => 'The Number of the Beast',
                        'description' => 'Third studio album released in 1982.',
                        'songs' => [
                            [
                                'name' => 'Invaders',
                                'authors' => [
                                    ['name' => 'Steve Harris']
                                ],
                            ],
                            [
                                'name' => 'Children of the Damned',
                                'authors' => [
                                    ['name' => 'Steve Harris']
                                ],
                            ],
                            [
                                'name' => 'The Prisoner',
                                'authors' => [
                                    ['name' => 'Adrian Smith'],
                                    ['name' => 'Steve Harris']
                                ],
                            ],
                        ],
                    ],
                    [
                        'name' => 'Powerslave',
                        'description' => 'Fifth studio album released in 1984.',
                        'songs' => [
                            [
                                'name' => 'Aces High',
                                'authors' => [
                                    ['name' => 'Steve Harris']
                                ],
                            ],
                            [
                                'name' => '2 Minutes to Midnight',
                                'authors' => [
                                    ['name' => 'Adrian Smith'],
                                    ['name' => 'Bruce Dickinson']
                                ],
                            ],
                            [
                                'name' => 'Losfer Words (Big \'Orra)',
                                'authors' => [
                                    ['name' => 'Steve Harris']
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Black Sabbath',
                'description' => 'An English rock band, formed in Birmingham in 1968, widely regarded as pioneers of heavy metal music.',
                'lps' => [
                    [
                        'name' => 'Paranoid',
                        'description' => 'Second studio album released in 1970.',
                        'songs' => [
                            [
                                'name' => 'War Pigs',
                                'authors' => [
                                    ['name' => 'Ozzy Osbourne'],
                                    ['name' => 'Tony Iommi'],
                                    ['name' => 'Geezer Butler'],
                                    ['name' => 'Bill Ward']
                                ],
                            ],
                            [
                                'name' => 'Paranoid',
                                'authors' => [
                                    ['name' => 'Ozzy Osbourne'],
                                    ['name' => 'Tony Iommi'],
                                    ['name' => 'Geezer Butler'],
                                    ['name' => 'Bill Ward']
                                ],
                            ],
                            [
                                'name' => 'Planet Caravan',
                                'authors' => [
                                    ['name' => 'Ozzy Osbourne'],
                                    ['name' => 'Tony Iommi'],
                                    ['name' => 'Geezer Butler'],
                                    ['name' => 'Bill Ward']
                                ],
                            ],
                        ],
                    ],
                    [
                        'name' => 'Master of Reality',
                        'description' => 'Third studio album released in 1971.',
                        'songs' => [
                            [
                                'name' => 'Sweet Leaf',
                                'authors' => [
                                    ['name' => 'Ozzy Osbourne'],
                                    ['name' => 'Tony Iommi'],
                                    ['name' => 'Geezer Butler'],
                                    ['name' => 'Bill Ward']
                                ],
                            ],
                            [
                                'name' => 'After Forever',
                                'authors' => [
                                    ['name' => 'Ozzy Osbourne'],
                                    ['name' => 'Tony Iommi'],
                                    ['name' => 'Geezer Butler'],
                                    ['name' => 'Bill Ward']
                                ],
                            ],
                            [
                                'name' => 'Embryo',
                                'authors' => [
                                    ['name' => 'Tony Iommi']
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Megadeth',
                'description' => 'An American heavy metal band formed in 1983 in Los Angeles, California.',
                'lps' => [
                    [
                        'name' => 'Peace Sells... but Who\'s Buying?',
                        'description' => 'Second studio album released in 1986.',
                        'songs' => [
                            [
                                'name' => 'Wake Up Dead',
                                'authors' => [
                                    ['name' => 'Dave Mustaine']
                                ],
                            ],
                            [
                                'name' => 'The Conjuring',
                                'authors' => [
                                    ['name' => 'Dave Mustaine']
                                ],
                            ],
                            [
                                'name' => 'Peace Sells',
                                'authors' => [
                                    ['name' => 'Dave Mustaine']
                                ],
                            ],
                        ],
                    ],
                    [
                        'name' => 'Rust in Peace',
                        'description' => 'Fourth studio album released in 1990.',
                        'songs' => [
                            [
                                'name' => 'Holy Wars... The Punishment Due',
                                'authors' => [
                                    ['name' => 'Dave Mustaine']
                                ],
                            ],
                            [
                                'name' => 'Hangar 18',
                                'authors' => [
                                    ['name' => 'Dave Mustaine'],
                                    ['name' => 'Marty Friedman']
                                ],
                            ],
                            [
                                'name' => 'Take No Prisoners',
                                'authors' => [
                                    ['name' => 'Dave Mustaine']
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Slayer',
                'description' => 'An American thrash metal band from Huntington Park, California, formed in 1981.',
                'lps' => [
                    [
                        'name' => 'Reign in Blood',
                        'description' => 'Third studio album released in 1986.',
                        'songs' => [
                            [
                                'name' => 'Angel of Death',
                                'authors' => [
                                    ['name' => 'Jeff Hanneman']
                                ],
                            ],
                            [
                                'name' => 'Piece by Piece',
                                'authors' => [
                                    ['name' => 'Kerry King']
                                ],
                            ],
                            [
                                'name' => 'Necrophobic',
                                'authors' => [
                                    ['name' => 'Jeff Hanneman'],
                                    ['name' => 'Kerry King']
                                ],
                            ],
                        ],
                    ],
                    [
                        'name' => 'South of Heaven',
                        'description' => 'Fourth studio album released in 1988.',
                        'songs' => [
                            [
                                'name' => 'South of Heaven',
                                'authors' => [
                                    ['name' => 'Jeff Hanneman'],
                                    ['name' => 'Tom Araya']
                                ],
                            ],
                            [
                                'name' => 'Silent Scream',
                                'authors' => [
                                    ['name' => 'Jeff Hanneman'],
                                    ['name' => 'Tom Araya']
                                ],
                            ],
                            [
                                'name' => 'Live Undead',
                                'authors' => [
                                    ['name' => 'Jeff Hanneman'],
                                    ['name' => 'Kerry King']
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($artistsData as $artistData) {
            $artist = Artist::factory()->create([
                'name' => $artistData['name'],
                'description' => $artistData['description'],
            ]);

            foreach ($artistData['lps'] as $lpData) {
                $lp = $artist->lps()->create([
                    'name' => $lpData['name'],
                    'description' => $lpData['description'],
                ]);

                foreach($lpData['songs'] as $songData) {
                    $song = $lp->songs()->create([
                        'name' => $songData['name']
                    ]);

                    foreach($songData['authors'] as $authorData) {
                        $song->authors()->attach(
                            Author::firstOrCreate(['name' => $authorData['name']])
                        );
                    }
                }
            }
        }
    }
}
