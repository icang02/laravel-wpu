@extends('layouts.main')

@section('content')
    <div class="container mt-5 pt-5 pb-5">
        <h1 class="text-center mb-4">{{ $title }}</h1>

        <div class="row justify-content-center mb-3">
            <div class="col-lg-6">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @elseif(request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif

                    <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Search.."
                            value="{{ request('search') }}">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        @if ($posts->count())
            <div class="card shadow">
                @if ($posts[0]->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                            class="img-fluid shadow">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                        alt="{{ $posts[0]->category->name }}">
                @endif

                <div class="card-body text-center">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                    <p class="mb-3">
                        <small class="text-muted">
                            By <a href="/posts?author={{ $posts[0]->author->username }}"
                                class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                            in
                            <a href="/posts?category={{ $posts[0]->category->slug }}"
                                class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>

                    <p class="card-text">{{ $posts[0]->excerpt }}</p>

                    <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read More</a>
                </div>
            </div>

            <div class="row justify-content-center mt-5 mb-4">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow">
                            <div class="position-absolute px-3 py-2" style="background: rgba(0, 0, 0, 0.7)">
                                <a class="text-decoration-none text-white"
                                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>

                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="img-fluid shadow">
                            @else
                                <img src="https://source.unsplash.com/500x350?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="mb-3">
                                    <small class="text-muted">
                                        By <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ Str::limit($post->excerpt, 100) }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center fs-4">No post found.</p>
        @endif

        <div class="mt-4 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>

    </div>
@endsection
