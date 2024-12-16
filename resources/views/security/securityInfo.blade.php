@extends('layouts.app')

@section('title', 'Security Info')

@push('styles')
    <style>
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card img {
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }
    </style>
@endpush

@section('content')
    <!-- Main Content -->
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="display-4">Security Info</h1>
            <p class="fs-5 text-secondary">Meet our dedicated security team at Telkom University. They work around the clock to ensure the safety and well-being of everyone on campus. Feel free to reach out to them if you need any assistance.</p>
        </div>

        <div class="row g-4">
            @foreach ($securityTeam as $security)
                <div class="col-md-4">
                    <a class="text-decoration-none" href="{{ route($security['route']) }}">
                        <div class="card h-100 shadow-sm text-center p-3">
                            <img class="img-fluid mx-auto rounded-circle" src="{{ asset($security['img']) }}" alt="{{ $security['name'] }}'s Profile Picture" style="width: 70px; height: 70px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $security['name'] }}</h5>
                                <p class="card-text text-muted mb-2">Security</p>
                                <span class="btn btn-link p-0">More info <i class="fa fa-caret-right" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
@endpush
