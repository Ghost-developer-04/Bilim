<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Location;
use App\Models\Season;
use App\Models\Session;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{

    public function definition(): array
    {
        $season = Season::inRandomOrder()->first();
        $location = Location::inRandomOrder()->first();
        $classroom = Classroom::inRandomOrder()->first();
        $session = Session::inRandomOrder()->first();
        $course = Course::inRandomOrder()->first();
        $teacher = Teacher::inRandomOrder()->first();

        return [
            'season_id' => $season->id,
            'location_id' => $location->id,
            'classroom_id' => $classroom->id,
            'session_id' => $session->id,
            'course_id' => $course->id,
            'teacher_id' => $teacher->id,
        ];
    }
}
