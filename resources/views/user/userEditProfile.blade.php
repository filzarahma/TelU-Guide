@extends('layouts.app')

@section('title', 'User Edit Profile')

@section('content')
    <div class="container py-5">
        <!-- Header Section -->
        <div class="text-center">
            <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
                <h3 class="fw-bold my-4">Edit Profile</h3>
            </div>
            <img class="rounded-circle border border-3" src="https://i.pinimg.com/originals/7c/2b/b9/7c2bb9ffda7c14938f354bb42a56812f.jpg" alt="Profile Picture" width="150">
            <a class="text-muted d-block mt-2 small text-decoration-none" href="{{ url()->current() }}">Edit Profile</a>
        </div>

        <!-- Profile Edit Form -->
        <div class="col-md-8 mx-auto mt-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold" for="name">Nama</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="name" name="name" type="text" value="Jeman Na">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold" for="nim">NIM</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="nim" name="nim" type="text" value="1301190234">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label fw-bold" for="status">Status</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="status" name="status">
                                <option value="Mahasiswa" selected>Mahasiswa</option>
                                <option value="Dosen">Dosen</option>
                                <option value="Alumni">Alumni</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col text-end">
                            <a class="btn btn-danger w-25 shadow-sm" href="{{ route('user.view.profile') }}">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
