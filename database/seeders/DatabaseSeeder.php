<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Lesson;
use App\Models\Registration;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SeasonSeeder::class,
            LocationSeeder::class,
            ClassroomSeeder::class,
            SessionSeeder::class,
            CourseSeeder::class,
        ]);

        Student::factory(100)->create();
        Teacher::factory(25)->create();
        Lesson::factory(50)->create();
        Registration::factory(250)->create();
    }
}
