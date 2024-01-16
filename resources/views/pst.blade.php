@extends('layouts.main')


@section('container')

<div class="container">
    <div class="row mb-5">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $posts->title }}</h1>
            <p>By. <a href="/authors/{{ $posts->author->username }}"class="text-decoration-none">{{ $posts->author->name }}</a> in <a href="/categories/{{ $posts->category->slug }}"class="text-decoration-none">{{  $posts->category->name  }}</a></p>
            <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid">
        <article class="my-3 fs-6">
            {!! $posts->body !!}
        </article>
            <a href="/blog"class="text-decoration-none d-block mt-3">Kembali ke Blog</a>
        </div>
    </div>
</div>

  
   

@endsection
 