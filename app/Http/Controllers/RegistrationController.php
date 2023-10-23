<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Teacher;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $request->validate([
            'q' => 'nullable|string|max:30',
            'student' => 'nullable|string|max:255',
            'season' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'classroom' => 'nullable|string|max:255',
            'course' => 'nullable|string|max:255',
            'session' => 'nullable|string|max:255',
            'teacher' => 'nullable|string|max:255',
            'sortBy' => 'nullable|string|in:low-to-high, high-to-low, old-to-new'
        ]);

        $f_q = $request->has('q') ? $request->q : null;
        $f_q2 = $request->has('q') ? str($request->q)->slug() : null;
        $f_student = $request->has('student') ? $request->student : null;
        $f_season = $request->has('season') ? $request->season : null;
        $f_location = $request->has('location') ? $request->location : null;
        $f_classroom = $request->has('classroom') ? $request->classroom : null;
        $f_course = $request->has('course') ? $request->course : null;
        $f_session = $request->has('session') ? $request->session : null;
        $f_teacher = $request->has('teacher') ? $request->teacher : null;
        $f_sortBy = $request->has('sortBy') ? $request->sortBy : null;


        $registrations = Registration::when(isset($f_q), function ($query) use ($f_q, $f_q2) {
            return $query->where(function ($query) use ($f_q, $f_q2) {
                $query->orWhere('name', 'like', '%' . $f_q . '%');
                $query->orWhere('slug', 'like', '%' . $f_q . '%');
                $query->orWhere('name', 'like', '%' . $f_q2 . '%');
                $query->orWhere('slug', 'like', '%' . $f_q2 . '%');
            });
        })
            ->when(isset($f_student), function ($query) use ($f_student) {
                return $query->whereHas('student', function ($query) use ($f_student) {
                    $query->where('full_name', $f_student);
                });
            })
            ->when(isset($f_season), function ($query) use ($f_season) {
                return $query->whereHas('season', function ($query) use ($f_season) {
                    $query->where('slug', $f_season);
                });
            })
            ->when(isset($f_location), function ($query) use ($f_location) {
                return $query->whereHas('location', function ($query) use ($f_location) {
                    $query->where('slug', $f_location);
                });
            })
            ->when(isset($f_classroom), function ($query) use ($f_classroom) {
                return $query->whereHas('classroom', function ($query) use ($f_classroom) {
                    $query->where('slug', $f_classroom);
                });
            })
            ->when(isset($f_session), function ($query) use ($f_session) {
                return $query->whereHas('session', function ($query) use ($f_session) {
                    $query->where('slug', $f_session);
                });
            })
            ->when(isset($f_teacher), function ($query) use ($f_teacher) {
                return $query->whereHas('teacher', function ($query) use ($f_teacher) {
                    $query->where('full_name', $f_teacher);
                });
            })
            ->when(isset($f_sortBy), function ($query) use ($f_sortBy) {
                if ($f_sortBy == 'low-to-high') {
                    return $query->orderBy('price');
                } elseif ($f_sortBy == 'high-to-low') {
                    return $query->orderBy('price', 'desc');
                } elseif ($f_sortBy == 'old-to-new') {
                    return $query->orderBy('id');
                } else {
                    return $query->orderBy('id', 'desc');
                }
            }, function ($query) {
                return $query->orderBy('id', 'desc');
            })
            ->with('student', 'lesson')
            ->paginate(20)
            ->withQueryString();

        return view('registrations.index')
            ->with([
                'registrations' => $registrations,
                'f_q' => $f_q,
                'f_student' => $f_student,
                'f_season' => $f_season,
                'f_session' => $f_session,
                'f_location' => $f_location,
                'f_classroom' => $f_classroom,
                'f_teacher' => $f_teacher,
                'f_course' => $f_course,
                'f_sortBy' => $f_sortBy,
            ]);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
