@extends('layouts.app')

@section('content')

<h1>Dashboard</h1>

<div style="display:flex;gap:20px;flex-wrap:wrap;">

    <div class="card" style="flex:1;">
        <h2>📚 Total E-Book</h2>
        <h1>120</h1>
    </div>

    <div class="card" style="flex:1;">
        <h2>🏷️ Kategori</h2>
        <h1>15</h1>
    </div>

    <div class="card" style="flex:1;">
        <h2>👥 Pengguna</h2>
        <h1>50</h1>
    </div>

</div>

@endsection