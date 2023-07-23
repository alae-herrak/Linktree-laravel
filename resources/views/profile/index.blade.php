@extends('master')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 col-md-8 col-lg-6 bg-light border border-1 rounded-3 p-3">
                <h2>Profile information</h2>
                <form action="/profile-info" method="post">
                    @csrf
                    @method('PATCH')
                    <label for="name" class="form-label">Name</label>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" name="name" id="name" value="{{ auth()->user()->name }}"
                        class="form-control mb-3" />
                    <label for="email" class="form-label">Name</label>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="email" name="email" id="email" value="{{ auth()->user()->email }}"
                        class="form-control mb-3" />
                    <label for="description" class="form-label">Description</label>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <textarea name="description" id="description" class="form-control mb-3">{{ auth()->user()->description }}</textarea>
                    <button type="submit" class="btn btn-dark">Save</button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-8 col-lg-6 bg-light border border-1 rounded-3 p-3">
                <h2>Password</h2>
                <form action="/profile-password" method="post">
                    @csrf
                    @method('PATCH')
                    <label for="current_password" class="form-label">Current password</label>
                    @error('current_password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="password" name="current_password" id="current_password" class="form-control mb-3" />
                    <label for="password" class="form-label">New password</label>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="password" name="password" id="password" class="form-control mb-3" />
                    <label for="password_confirmation" class="form-label">Password confirmation</label>
                    @error('password_confirmation')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="form-control mb-3" />
                    <button type="submit" class="btn btn-dark">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
