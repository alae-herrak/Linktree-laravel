@extends('master')

@section('content')
    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 bg-light border border-1 rounded-3 p-3">
                <h3>Create new link</h3>
                <form action="/links" method="post">
                    @csrf
                    <label for="title" class="form-label">Title</label>
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" name="title" id="title" class="form-control mb-3"
                        value="{{ old('title') }}" />
                    <label for="url" class="form-label">Url</label>
                    @error('url')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" name="url" id="url" class="form-control mb-3"
                        value="{{ old('url') }}" />
                    <button type="submit" class="btn btn-dark">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
