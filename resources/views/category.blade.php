{{-- @dd($post)
@extends('layouts.main')
@section('container')

    <h1>Post Category : {{ $category }}</h1>
@foreach ($posts as $post)

<article mb-5>
    <h2><a href="/blog/{{ $ppst->slug }}">{{ $post->title }}</a></h2>
    <h5>{{ $post->penulis }}</h5>
    <p>{{ $post->excerpt }}</p>
</article>

@endforeach

@endsection --}}
@extends('layouts.main')
@section('container')
    <h1>Post Category : {{ $category }}</h1>
@foreach ($posts as $post)
<article mb-5>
    
    <h2><a href="/blog/{{ $post->slug }}"class="text-decoration-none">{{ $post->title }}</a></h2>
    <h5>{{ $post->penulis }}</h5>
    <p>{{ $post->excerpt }}</p>
</article>
@endforeach
@endsection
