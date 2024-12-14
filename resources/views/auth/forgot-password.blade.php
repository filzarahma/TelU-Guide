@extends('layouts.app')

@section('title', 'Forgot Password')

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
                <h1 class="card-title fs-4 mb-3 fw-bold text-dark">FORGOT PASSWORD</h1>
                <p class="text-secondary mb-4">Enter your email to receive a password reset link</p>
                <form>
                    <div class="mb-5 text-start">
                        <label class="form-label fw-semibold text-secondary" for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email">
                    </div>
                    <a class="btn btn-primary border-0 rounded-pill w-100 mb-3" href="{{ route('login') }}" style="background-color: #f0555d">Reset Password</a>
                    <div class="text-center">
                        <a class="link-small text-muted text-decoration-none" href="{{ route('login') }}">Back to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
