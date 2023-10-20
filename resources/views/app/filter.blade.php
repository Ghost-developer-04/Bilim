<form action="{{ url()->current() }}">
    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <select class="form-select" id="location" name="location">
            <option value selected>-</option>
            @foreach($locations as $location)
                <option value="{{ $location->slug }}" {{ $location->slug == $f_location ? 'selected':'' }}>
                    {{ $location->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="student" class="form-label">Student</label>
        <select class="form-select" id="student" name="student">
            <option value selected>-</option>
            @foreach($students as $student)
                <option value="{{ $student->full_name }}" {{ $student->full_name == $f_user ? 'selected':'' }}>
                    {{ $student->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="course" class="form-label">Course</label>
        <select class="form-select" id="course" name="course">
            <option value selected>-</option>
            @foreach($courses as $course)
                <option value="{{ $course->slug }}" {{ $course->slug == $f_course ? 'selected':'' }}>
                    {{ $course->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="session" class="form-label">Session</label>
        <select class="form-select" id="session" name="session">
            <option value selected>-</option>
            @foreach($sessions as $session)
                <option value="{{ $session->slug }}" {{ $session->slug == $f_session ? 'selected':'' }}>
                    {{ $session->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="classroom" class="form-label">classroom</label>
        <select class="form-select" id="classroom" name="classroom">
            <option value selected>-</option>
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->slug }}" {{ $classroom->slug == $f_classroom ? 'selected':'' }}>
                    {{ $classroom->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="row g-1 g-sm-2">
        <div class="col">
            <button type="submit" class="btn btn-danger btn-sm w-100">Filter</button>
        </div>
        <div class="col">
            <a href="{{ url()->current() }}" class="btn btn-secondary btn-sm w-100">Clear</a>
        </div>
    </div>
</form>