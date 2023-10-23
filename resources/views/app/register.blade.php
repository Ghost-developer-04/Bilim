<div class="col">
    <div class="card">
        <div class="card-body p-2">
            <div class="position-relative">
                <div class="position-absolute top-0 end-0 m-sm-1 small">
                    {{$registration->whatSeason()}}
                </div>
                <img src="{{ asset('img/register.jpg') }}" alt="" class="img-fluid rounded">
            </div>
            <a href="{{ route('products.show', $registration->id) }}" class="link-dark h6 text-decoration-none">
                Registration No. {{ $registration->id }}
            </a>
            <div>
                <a href="{{ route('registrations.index', ['student' => $registration->student->slug]) }}" class="text-decoration-none h5">
                    Student: {{$registration->student->name}}
                </a>
            </div>
            <div>
                <a href="{{ route('registrations.index', ['course' => $registration->course->slug]) }}" class="text-decoration-none h5">
                    Course: {{$registration->course->name}}
                </a>
            </div>
            <div>
                <a href="{{ route('registrations.index', ['student' => $registration->season->slug]) }}" class="text-decoration-none h5">
                    Season: {{$registration->season->name}}
                </a>
            </div>
            <div>
                <a href="{{ route('registrations.index', ['student' => $registration->location->slug]) }}" class="text-decoration-none h5">
                    Location: {{$registration->location->name}}
                </a>
            </div>
            @if($registration->payment_status == true)
                <div class="h5 text-primary">
                    {{ number_format($registration->price, 2, '.', '') }}
                    <small>TMT</small>
                </div>
            @else
                <div class="h5 text-danger">
                    {{ number_format($registration->price, 2, '.', '') }}
                    <small>TMT</small>
                </div>
            @endif
            <div>
                Paid by <span class="text-danger">{{ $registration->payment_method }}</span>
            </div>
        </div>
    </div>
</div>