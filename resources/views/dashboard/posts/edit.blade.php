@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">edit post</h1>
        </div>
        <div class="col-lg-8 mb-3">
            <form method="POST" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title"  value="{{ old('title', $post->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                        name="slug"  value="{{ old('slug', $post->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select " name="category_id" required>
                        @foreach ($categories as $category)
                            @if (old('category_id', $post->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

            
                <div class="mb-3">
                    <label for="image" class="form-label">Post image</label>
                    <input type="hidden" name="oldImage" value="{{ $post->image }}">
                    @if($post->image)
                    <img src="{{ asset("storage/" . $post->image) }}" class="img-fluid mb-3 col-sm-5 d-block">
                    @else
                         <img class="img-preview img-fluid" style="display: none;">
                    @endif
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    @error('body') 
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body',$post->body) }}">
                    <trix-editor input="body"></trix-editor>
                </div>
                <button type="submit" class="btn btn-primary">Update  Post</button>
            </form>
        </div>
    </main>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');
        const trix = document.querySelector('trix-editor');

        title.addEventListener('input', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });

        trix.addEventListener('trix-change', function() {
            // You may want to handle changes in the trix editor here
        })

        function previewImage() {
    const imageInput = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    if (imageInput.files && imageInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            imgPreview.src = e.target.result;
        };

        reader.readAsDataURL(imageInput.files[0]);
        imgPreview.style.display = "block";
    } else {
        imgPreview.style.display = "none";
        imgPreview.src = "";
    }
}
    </script>
@endsection
