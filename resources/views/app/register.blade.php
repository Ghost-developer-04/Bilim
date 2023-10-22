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
                {{ $registration->name }}
            </a>
            <div class="h5 text-secondary">
                {{ number_format($registration->price(), 2, '.', ' ') }} <small>TMT</small>
            </div>
        </div>
    </div>
</div>