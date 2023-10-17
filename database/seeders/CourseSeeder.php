<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{

    public function run(): void
    {
        $courses = [
            ['name' => 'English for kids', 'price' => '1200'],
            ['name' => 'English for juniors', 'price' => '1400'],
            ['name' => 'English', 'price' => '1600'],
            ['name' => 'Maths for kids', 'price' => '1200'],
            ['name' => 'Maths for juniors', 'price' => '1400'],
            ['name' => 'Maths', 'price' => '1600'],
            ['name' => 'China', 'price' => '1200'],
            ['name' => 'Spain', 'price' => '1400'],
            ['name' => 'Russian for kids', 'price' => '1100'],
            ['name' => 'Russian for juniors', 'price' => '1300'],
            ['name' => 'Russian', 'price' => '1500'],
            ['name' => 'Deutch', 'price' => '1500'],
            ['name' => 'Biology', 'price' => '1650'],
            ['name' => 'Chemistry', 'price' => '1700'],
            ['name' => 'Computer', 'price' => '1950'],
            ['name' => 'Programming', 'price' => '2200'],
            ];

        foreach ($courses as $course) {
            Course::create([
                'name' => $course['name'],
                'price' => $course['price'],
            ]);
        }
    }
}
