{{-- @dd($post) --}}
@extends('layouts.main')
@section('container')

    <h1>Halaman Post</h1>
@foreach ($post as $pst)

<article mb-5>
    <h2>
        <a href="/blog/{{ $pst['slug'] }}">
            {{ $pst['judul'] }}
        </a>
    </h2>
            <h5>{{ $pst['penulis'] }}</h5>
    <p>{{ $pst['tanggal'] }}</p>
    <p>{{ $pst['body'] }}</p>
</article>


@endforeach
{{-- <a href="/blog">Kembali ke Blog</a> --}}

{{-- <p id="teksPendek">Ini adalah teks pendek... <a href="#" id="bacaLebih">Baca Lebih Lanjut</a></p>
<p id="teksPanjang" style="display: none;">Ini adalah teks panjang yang akan ditampilkan saat pengguna mengklik "Baca Lebih Lanjut".</p>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function() {
    $("#bacaLebih").click(function() {
        $("#teksPendek").hide();
        $("#teksPanjang").show();
    });
}); --}}
{{-- </script> --}}



    

@endsection
