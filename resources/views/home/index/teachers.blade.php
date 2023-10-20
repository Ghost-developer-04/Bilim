<div class="bg-danger-subtle bg-opacity-10">
    <div class="container-xl pt-3">
        <div class="h4 text-info text-lg-center">
            Our Teachers
        </div>
        <div class="row justify-content-center row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 g-3 g-sm-4">
            @foreach($teachers as $teacher)
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center p-2">
                            <img src="{{ asset('img/teacher-img.jpg') }}" class="img-fluid">
                            <div class="mt-3">
                                <a href="#" class="stretched-link link-dark fw-semibold text-decoration-none">
                                    {{ $teacher->first_name }} {{ $teacher->last_name }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>