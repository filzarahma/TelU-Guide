@extends('layouts.app')

@section('title', 'Security Edit Profile')

@section('content')
    <div class="container py-5">
        <!-- Header Section -->
        <div class="text-center">
            <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
                <h3 class="fw-bold my-4">Edit Profile</h3>
            </div>
            <img class="rounded-circle border border-3" src="{{ asset('assets/img/jamal.jpg') }}" alt="Profile Picture" width="150">
            <a class="text-muted d-block mt-2 small text-decoration-none" href="{{ url()->current() }}">Edit picture</a>
        </div>

        <!-- Profile Form Section -->
        <div class="col-md-8 mx-auto mt-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Full Name</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="Kenneth Valdez">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Email</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="email" value="fip@jukmuh.al">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Phone</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="(239) 816-9029">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold">Mobile</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="(320) 380-4539">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col text-end">
                            <a class="btn btn-danger w-25 shadow-sm" href="{{ route('security.view.profile') }}">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
