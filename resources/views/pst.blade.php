{{-- 
  post::create([
     'title'=> 'Judul Ke Lima',
     'slug' => 'judul-ke-lima',
     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe corporis vero at blanditiis dolores facilis?',
     'body' => '<p>quos error saepe! Illo quae assumenda vero quis fugit aperiam iste. Quibusdam, deserunt modi? Corrupti quaerat illum totam possimus. Ducimus vitae quam deserunt rem unde saepe facilis magnam a doloremque reprehenderit, sint est error ut quidem nam voluptates consequatur aliquid laborum velit beatae vero eligendi excepturi et asperiores!</p> <p>Repudiandae soluta quaerat, illo enim veniam, veritatis doloribus aliquam, recusandae vero laudantium suscipit. Quos odit itaque at dicta. Ipsa voluptatibus dolorum officia, exercitationem accusamus laudantium aspernatur. Aperiam nisi inventore eligendi, doloribus sapiente nulla et, maxime dolorem quas velit impedit eius odio modi earum dolores.</p> <p>Assumenda sed quisquam voluptate labore. Dolor est voluptate, hic assumenda, libero pariatur temporibus nemo sapiente illum tempore minima a nesciunt modi doloribus totam eius voluptatibus repudiandae nobis! Dolores nemo magnam incidunt!</p>'
 ])--}}
 
@extends('layouts.main')



@section('container')
<article>
    <h2>{{ $posts->title }}</h2>
    <p>By. <a href="#"class="text-decoration-none">{{ $posts->user->name }}</a> in <a href="/categories/{{ $posts->category->slug }}"class="text-decoration-none">{{  $posts->category->name  }}</a></p>
    {!! $posts->body !!}
    <a href="/blog"class="text-decoration-none d-block mt-3">Kembali ke Blog</a>
</article>
@endsection
 