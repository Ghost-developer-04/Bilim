<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Session;
use App\Models\Season;
use App\Models\Location;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $registrations = Registration::with(['lesson' => function($query) {
            $query->with('season', 'location', 'classroom', 'session', 'course', 'teacher');
            $query->orderBy('id');
        }])
            ->orderBy('id')
            ->take(10)
            ->get();


        $courses = Course::all();
        $teachers = Teacher::all();

        return view('home.index')
            ->with([
                'registrations' => $registrations,
                'courses' => $courses,
                'teachers' => $teachers,
            ]);
    }
}
