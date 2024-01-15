{{-- 
@extends('layouts.main')
@section('container')
    <h1>Post Categories</h1>
@foreach ($categories as $category)
<article mb-5>
    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </li>
    </ul>

</article>
@endforeach
@endsection --}}


@extends('layouts.main')
@section('container')
    <h1>Post Categories</h1>
@foreach ($categories as $category)
<article mb-5>
    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}"class="text-decoration-none">{{ $category->name }}</a></h2>
        </li>
    </ul>

</article>
@endforeach
@endsection