@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">
                <h3>Your links</h3>
                @if (count($links))
                    <div class="d-flex flex-column gap-3 my-3">
                        @foreach ($links as $link)
                            <div class="bg-light p-3 border border-1 d-flex justify-content-center">
                                <a class="text-decoration-none" href="{{ $link->url }}" target="_blank">{{ $link->title }}</a>
                                <div class="d-flex gap-2 ms-auto">
                                    <a class="text-decoration-none text-body" href="/links/{{ $link->id }}/edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <form action="/links/{{ $link->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-decoration-none text-body border-0 p-0 bg-body"
                                            onclick="return confirm('Are you sure you want to delete this link?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="lead">You have no links, start by creating one</p>
                @endif
                <a href="/links/create" class="btn btn-primary">Create new link</a>
            </div>
        </div>
    </div>
@endsection
