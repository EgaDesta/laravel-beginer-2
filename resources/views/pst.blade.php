@extends('layouts.main')


@section('container')
<article>
    <h2>{{ $post['judul'] }}</h2>
    <h5>{{ $post['penulis'] }}</h5>
    <p>{{ $post['body'] }}</p>
    <a href="/blog">Kembali ke Blog</a>
</article>
@endsection