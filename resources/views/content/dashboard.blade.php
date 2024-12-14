@extends('layouts.app')

@section('title', 'Dashboard')

@push('styles')
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            align-content: center;
            justify-content: center;
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 18px;
            margin-top: 10px;
            color: #444;
        }

        .card-body {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 15px;
        }
    </style>
@endpush

@section('content')
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="display-4">Hello Teltutizen!</h1>
            <p class="fs-5 text-secondary">Where are you headed to?</p>
            <p class="fw-bold fs-5">Recommended Places:</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($places as $place)
                <div class="col">
                    <a class="text-decoration-none" href="{{ $place['url'] }}" target="_blank">
                        <div class="card text-center h-100" style="background-image: url('{{ asset('assets/places/' . $place['image']) }}'); background-size: auto; background-position: center; color: white;">
                            <div class="card-body d-flex flex-column align-items-center">
                                <img class="img-fluid mb-3" src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="{{ $place['name'] }}">
                                <h3 class="card-title fs-5 text-white">{{ $place['name'] }}</h3>
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
