<div class="container-xl">
    <nav class="navbar bg-body-secondary">
        <div class="container-fluid">
            <a href="{{ route('home') }}" class="navbar-brand text-info"><i class="bi bi-book"> e-Education</i></a>
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Courses
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">{{ $course->name }}</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Teachers</a>
            </li>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>