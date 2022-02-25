@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success me-1"><span data-feather="arrow-left"></span> Back to
                    posts</a>
                <a href="/dashboard/posts" class="btn btn-warning me-1"><span data-feather="edit"></span> Ediit</a>
                <a href="/dashboard/posts" class="btn btn-danger"><span data-feather="x-circle"></span>Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid shadow mt-3">

                <article class="my-4 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
