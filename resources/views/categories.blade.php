@extends('layouts.main')

@section('content')
    <div class="container mt-5 py-4">
        <h1 class="mb-5">Post Categories</h1>

        <div class="row justify-content-center">
            @foreach ($categories as $category)
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="/posts?category={{ $category->slug }}" class="shadow d-block">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center fs-3 flex-fill p-4" style="background: rgba(0, 0, 0, 0.7)">
                                    {{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection
