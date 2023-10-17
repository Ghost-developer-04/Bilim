<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{

    public function run(): void
    {
        $locations = [
            'Ashgabat city, Uniwermag',
            'Ashgabat city, Parahat-1',
            'Anew city, Azatlyk koce'
        ];

        foreach ($locations as $location) {
            Location::create([
                'name' => $location,
            ]);
        }
    }
}
