@extends('layouts.app')

@section('content')

<div class="card">

<h1>Tambah E-Book</h1>

<form>

<label>Judul Buku</label>
<input type="text">

<label>Penulis</label>
<input type="text">

<label>Kategori</label>
<input type="text">

<label>Upload PDF</label>
<input type="file">

<button class="btn">
    Simpan
</button>

</form>

</div>

@endsection