@extends('layouts.main')

@section('content')
    <div class="container mt-5 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <h5 class="mb-3">
                    <small>
                        By <a href="/posts?author={{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a> in
                        <a href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a>
                    </small>
                </h5>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid shadow">

                <article class="my-4 fs-5">
                    {!! $post->body !!}
                </article>


                <a href="{{ URL::previous() }}" class="text-decoration-none btn btn-secondary">Back to Posts</a>

            </div>
        </div>
    </div>
@endsection
