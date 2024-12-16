@extends('layouts.app')

@section('title', 'Student Profile')

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
            <img class="img-fluid" src="https://i.pinimg.com/originals/7c/2b/b9/7c2bb9ffda7c14938f354bb42a56812f.jpg" alt="Student Picture" style="width: 150px; height: 150px;">
            <h3 class="mt-3">Jeman Na</h3>
            <a class="small" href="{{ route('user.edit.profile') }}">Edit Profile</a>
        </div>

        <!-- Profile Details Section -->
        <div class="container mt-4 p-4 bg-white rounded-3 shadow">
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">Nama</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    Jeman Na
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">NIM</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    1301190234
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">Status</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    Mahasiswa
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
