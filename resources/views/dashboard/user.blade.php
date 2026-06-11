@extends('layouts.app')

@section('content')

<div class="page-header">
    <div>
        <h1>Halo Dilla 👋</h1>
        <p class="page-subtitle">
            Temukan dan baca e-book favoritmu
        </p>
    </div>
</div>

<div class="dashboard-grid">

    <div class="stat-card">
        <div>
            <h3>Buku Dibaca</h3>
            <h1>25</h1>
        </div>
        <span>📚</span>
    </div>

    <div class="stat-card">
        <div>
            <h3>Favorit</h3>
            <h1>12</h1>
        </div>
        <span>⭐</span>
    </div>

    <div class="stat-card">
        <div>
            <h3>Download</h3>
            <h1>40</h1>
        </div>
        <span>⬇️</span>
    </div>

</div>

<div class="card">

<h2>Cari Buku</h2>

<input type="text" placeholder="Cari judul buku...">

</div>

<br>

<div class="card">

<h2>Buku Terbaru</h2>

<div class="dashboard-grid">

<div class="card">
<h3>Laravel Dasar</h3>
<p>Teknologi</p>
<br>
<a href="#" class="btn">Detail</a>
</div>

<div class="card">
<h3>UI UX Modern</h3>
<p>Desain</p>
<br>
<a href="#" class="btn">Detail</a>
</div>

<div class="card">
<h3>Mobile Programming</h3>
<p>Pendidikan</p>
<br>
<a href="#" class="btn">Detail</a>
</div>

</div>

</div>

@endsection