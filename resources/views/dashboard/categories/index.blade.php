
@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Post Category</h1>
        </div>

        @if(session('success'))
        <div class="alert alert-success col-lg-8" role="alert">
          {{ session('success') }}
        </div>
        @endif

        <div class="table-responsive col-lg-8">
          <a href="/dashboard/categories/create" class="btn btn-primary">Post Category</a>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info">
                                    <span data-feather="eye">eye</span>
                                </a>
                                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                                    <span data-feather="edit">yy</span>
                                </a>
                                <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                        <span data-feather="x-circle">X</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
