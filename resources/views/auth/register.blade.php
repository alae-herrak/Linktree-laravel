@extends('master')

@section('content')
    <h1 class="position-absolute text-center w-100 mt-3"><i class="fa-solid fa-link"></i> Linktree</h1>
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <form action="/register" method="post"
            class="auth-form bg-light d-flex flex-column gap-3 p-3 border border-1 rounded-3 mb-3">
            @csrf
            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" placeholder="name"
                    value="{{ old('name') }}" />
                <label for="name">Name</label>
            </div>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="email"
                    value="{{ old('email') }}" />
                <label for="email">Email</label>
            </div>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                <label for="password">Password</label>
            </div>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <div class="form-floating">
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                    placeholder="password_confirmation">
                <label for="password_confirmation">Password confirmation</label>
            </div>
            @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <p>Already have an account? <a href="/login">Login</a></p>
    </div>
@endsection
