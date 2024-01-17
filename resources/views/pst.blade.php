@extends('layouts.main')


@section('container')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1 class="mb-5">{{ $post->title }}</h1>
                <p>By. <a
                        href="/blog?author={{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a>
                    in <a
                        href="/blog?categories={{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a>
                </p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid">
                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>
                <a href="/blog"class="text-decoration-none d-block mt-3">Kembali ke Blog</a>
            </div>
        </div>
    </div>
@endsection
