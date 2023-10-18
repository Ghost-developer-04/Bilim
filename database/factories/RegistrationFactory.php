<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{

    public function definition(): array
    {
        $student = Student::inRandomOrder()->first();
        $lesson = Lesson::inRandomOrder()->first();
        $price = Course::inRandomOrder()->first();
        $payment_method = fake()->boolean();
        $payment_status = fake()->boolean(80);

        return [
            'student_id' => $student->id,
            'lesson_id' => $lesson->id,
            'price' => $price->price,
            'payment_method' => $payment_method == True ? fake()->creditCardType() : 'Paid by cash',
            'payment_status' => $payment_status,
        ];
    }
}
