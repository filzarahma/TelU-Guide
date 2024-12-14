@extends('layouts.app')

@section('title', 'Register')

@push('styles')
    <style>
        body {
            background: linear-gradient(135deg, #f0555d, #ff6f91);
        }

        .link-small {
            font-size: 12px;
        }
    </style>
@endpush

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 w-100">
        <div class="card p-4 rounded-4 shadow-lg" style="width: 340px;">
            <div class="card-body text-center">
                <h1 class="card-title fs-4 mb-5 fw-bold text-dark">REGISTER</h1>
                <form>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold text-secondary" for="name">Full Name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold text-secondary" for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold text-secondary" for="password">Password</label>
                        <input class="form-control" id="password" name="password" type="password" placeholder="Enter your password">
                    </div>
                    <div class="mb-4 text-start">
                        <label class="form-label fw-semibold text-secondary" for="confirm-password">Confirm Password</label>
                        <input class="form-control" id="confirm-password" name="confirm-password" type="password" placeholder="Confirm your password">
                    </div>
                    <a class="btn btn-primary border-0 rounded-pill w-100 mb-3" href="{{ route('login') }}" style="background-color: #f0555d">Register</a>
                    <div class="text-center">
                        <p class="link-small text-muted text-decoration-none">Already have an account? <a class="link-small text-link text-decoration-none" href="{{ route('login') }}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
