<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{

    public function run(): void
    {
        $classrooms = [
            'A1',
            'A2',
            'A3',
            'A4',
            'A5',
            'A6',
            'A7',
            'A8',
            'A9',
            'B1',
            'B2',
            'B3',
            'B4',
            'B5',
            'B6',
            'B7',
            'B8',
            'B9',
        ];

        foreach ($classrooms as $classroom) {
            Classroom::create([
                'location_id' => Location::inRandomOrder()->first()->id,
                'name' => $classroom,
                'slug' => str($classroom)->slug(),
            ]);
        }
    }
}
