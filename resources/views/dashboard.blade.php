@extends('layouts.app')

@section('content')

<div class="dashboard-grid">

    <div class="stat-card">
        <div>
            <h3>Total E-Book</h3>
            <h1>120</h1>
        </div>
        <span>📚</span>
    </div>

    <div class="stat-card">
        <div>
            <h3>Kategori</h3>
            <h1>15</h1>
        </div>
        <span>🏷️</span>
    </div>

    <div class="stat-card">
        <div>
            <h3>Pengguna</h3>
            <h1>50</h1>
        </div>
        <span>👤</span>
    </div>

</div>

<div class="content-grid">

    <div class="card">
        <h2>Aktivitas Sistem</h2>

        <div class="activity">
            <div>📚 Buku baru ditambahkan</div>
            <span>Hari ini</span>
        </div>

        <div class="activity">
            <div>🏷️ Kategori diperbarui</div>
            <span>Kemarin</span>
        </div>

        <div class="activity">
            <div>👤 Pengguna baru bergabung</div>
            <span>2 hari lalu</span>
        </div>

    </div>

    <div class="card">
        <h2>Ringkasan</h2>

        <div class="summary-box">
            <h1>85%</h1>
            <p>Koleksi E-Book Sudah Terdata</p>
        </div>

    </div>

</div>

@endsection