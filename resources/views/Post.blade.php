{{-- @dd($post)
@extends('layouts.main')
@section('container')

    <h1>Halaman Post</h1>
@foreach ($posts as $post)

<article class="mb-5 border-bottom">

    <h2><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>

    <p>By. Ega Destaviano in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{  $pst->category->name  }}</a></p>

    <p>{{ $pst->excerpt }}</p>
    <a href="/posts/{{ $post->slug }}"class="text-decoration-none">Read More..</a>
</article>

@endforeach

@endsection --}}


@extends('layouts.main')
@section('container')
    <h1>Halaman Post</h1>

    
@foreach ($posts as $post)
{{-- @dd($post->category); --}}
<article class="mb-5 border-bottom">
    <h2><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>

    <p>By. <a href="/authors/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{  $post->category->name  }}</a></p>
    <p>{{ $post->excerpt }}</p>
    <a href="/blog/{{ $post->slug }}"class="text-decoration-none">Read More..</a>
</article>
@endforeach
@endsection
