
@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
           <a href="/dashboard/posts" class="btn btn-success">Back to posts</a>
           <a href="" class="btn btn-warning">Edit</a>
           <a href="" class="btn btn-danger">Delete</a>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid mt-3">
            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
</main>
@endsection

