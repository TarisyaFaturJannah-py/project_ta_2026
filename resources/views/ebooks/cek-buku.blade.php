@extends('layouts.app')

@section('content')

<div class="card" style="max-width:700px;margin:auto">

    <h1>Cek Buku</h1>

    <p style="margin:15px 0;color:#666">
        Cari informasi buku berdasarkan ISBN atau Judul Buku.
    </p>

    <input type="text" placeholder="Masukkan ISBN atau Judul Buku">

    <button class="btn">
        Cari Buku
    </button>

    <div style="margin-top:25px">

        <h2>Hasil Pencarian</h2>

        <p><b>Judul:</b> Pemrograman Laravel</p>
        <p><b>Penulis:</b> John Doe</p>
        <p><b>Tahun:</b> 2025</p>

    </div>

</div>

@endsection