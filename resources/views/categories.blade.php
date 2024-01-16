
{{-- @extends('layouts.main')
@section('container')

    <h1>Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
            <a href="/categories/{{ $category->slug }}"class="text-decoration-none>">
              <div class="card text-bg-dark mx-3 my5" style="width: 18rem;">
                <img src="https://source.unsplash.com/300x300?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color:rgba(rgba(46, 54, 62, 0.924)">{{ $category->name }}</h5>
                </div>
              </div>
            </a>
              @endforeach
            </div>
        </div>
    </div>

@endsection --}}


@extends('layouts.main')
@section('container')

    <h1>Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
            <a href="/categories/{{ $category->slug }}" class="text-decoration-none">
              <div class="card text-bg-dark mx-3 my5" style="width: 18rem;">
                <img src="https://source.unsplash.com/300x300?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color:rgba(rgba(46, 54, 62, 0.924)">{{ $category->name }}</h5>
                </div>
              </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
