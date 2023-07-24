@extends('master')

@section('content')

    <div class="container p-3 d-flex flex-column" style="height:100vh">
        <h1 class="text-center w-100 mb-5"><i class="fa-solid fa-link"></i> Linktree</h1>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">
                <h3>{{ $user->name }}</h3>
                <p>{{ $user->description }}</p>
                @if (count($links))
                    <div class="d-flex flex-column gap-3 my-3">
                        @foreach ($links as $link)
                            <div class="bg-light p-3 border border-1 d-flex justify-content-center">
                                <a class="text-decoration-none" href="{{ $link->url }}"
                                    target="_blank">{{ $link->title }}</a>
                            </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="lead">This user doesn't have any links.</p>
            @endif
            @guest
                <p class="text-center mt-auto">Create your own Linktree, <a href="/register">Register</a> now!</p>
            @endguest
        </div>
    </div>

@endsection
