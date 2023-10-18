<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $registrations = Registration::with(['lesson' => function($query) {
            $query->with('course', 'teacher');
            $query->orderBy('id');
        }])
            ->orderBy('id')
            ->take(10)
            ->get();

        return view('home.index')
            ->with([
                'registrations' => $registrations,
            ]);
    }
}
