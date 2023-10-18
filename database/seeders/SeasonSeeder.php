<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{

    public function run(): void
    {
        $seasons = [
            'Winter',
            'Spring',
            'Summer',
            'Autumn',
        ];

        foreach ($seasons as $season) {
            Season::create([
                'name' => $season,
                'slug' => str($season)->slug(),
            ]);
        }
    }
}
