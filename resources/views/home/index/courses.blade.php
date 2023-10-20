<div class="bg-body-secondary bg-opacity-10">
    <div class="container-xl py-3">
        <div class="h4 text-info text-lg-center mb-3">Our Courses</div>
        <div class="row justify-content-center row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 g-3 g-sm-4">
            @foreach($courses as $course)
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center p-2">
                            <a href="#" class="stretched-link link-dark fw-semibold text-decoration-none">
                                {{ $course->name }}
                            </a>
                        </div>
                        <div class="badge bg-info-subtle text-danger-emphasis py-2">
                            {{ $course->price }} <small>TMT</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>