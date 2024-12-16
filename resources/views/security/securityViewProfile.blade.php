@extends('layouts.app')

@section('title', 'Security Profile')

@push('styles')
    <style>
        .profile-container img {
            object-fit: cover;
            border: 3px solid #ddd;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .profile-container a {
            color: #A9A9A9;
            text-decoration: none;
            font-size: 14px;
        }

        .profile-container a:hover {
            text-decoration: underline;
        }
    </style>
@endpush

@section('content')
    <div class="container py-5">
        <!-- Profile Section -->
        <div class="profile-container text-center">
            <img class="img-fluid" src="{{ asset('assets/img/jamal.jpg') }}" alt="Profile Picture" style="width: 150px; height: 150px;">
            <h3 class="mt-3">{{ $profile['name'] ?? 'Nakamoto Yuta' }}</h3>
            <a class="small" href="{{ route('security.edit.profile') }}">Edit Profile</a>
        </div>

        <!-- Profile Details Section -->
        <div class="container mt-4 p-4 bg-white rounded-3 shadow">
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $profile['name'] ?? 'Nakamoto Yuta' }}
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">Status</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $profile['status'] ?? 'Active' }}
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">Position</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $profile['position'] ?? 'Gate 1' }}
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">Phone Number</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{ $profile['phone'] ?? '(320) 380-4539' }}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col text-end">
                    <a class="btn btn-danger w-25 shadow-sm" href="{{ route('security.info') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
