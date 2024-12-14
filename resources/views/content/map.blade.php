@extends('layouts.app')

@section('title', 'Map')

@push('styles')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
        }

        .map-container iframe {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
@endpush

@section('content')
    <!-- Main Content -->
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="display-4">Explore TelU</h1>
            <p class="fs-5 text-secondary">Find your way around Telkom University using the map below</p>
        </div>
        <div class="map-container">
            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.304448019412!2d107.63034599999997!3d-6.973362599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1734157056437!5m2!1sid!2sid" style="height: 600px; border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
