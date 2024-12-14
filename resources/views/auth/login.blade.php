@extends('layouts.app')

@section('title', 'Login')

@push('styles')
    <style>
        body {
            background: linear-gradient(135deg, #f0555d, #ff6f91);
        }

        .link-small {
            font-size: 12px;
        }
    </style>

    </style>
@endpush

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 w-100">
        <div class="card p-4 rounded-4 shadow-lg" style="width: 340px;">
            <div class="card-body text-center">
                <h1 class="card-title fs-4 mb-3 fw-bold text-dark">LOGIN</h1>
                <form>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold text-secondary" for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-5 text-start">
                        <label class="form-label fw-semibold text-secondary" for="password">Password</label>
                        <input class="form-control" id="password" name="password" type="password" placeholder="Enter your password">
                    </div>
                    <div class="text-center p-0 m-0 mb-1">
                        <p class="link-small text-muted text-decoration-none p-0 m-0">Forgot your password? <a class="link-small text-link text-decoration-none" href="{{ route('forgot.password') }}">Click here</a></p>
                    </div>
                    <div class="text-center p-0 m-0 mb-4">
                        <p class="link-small text-muted text-decoration-none p-0 m-0">Don't have an account? <a class="link-small text-link text-decoration-none" href="{{ route('register') }}">Sign up</a></p>
                    </div>
                    <a class="btn btn-primary border-0 rounded-pill w-100" href="{{ route('dashboard') }}" style="background-color: #f0555d">Login</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
