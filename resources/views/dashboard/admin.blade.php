@extends('layouts.app')

@section('content')

<h1>Dashboard Admin</h1>

<div class="dashboard-grid">

<div class="stat-card">
<div>
<h3>Total Ebook</h3>
<h1>120</h1>
</div>
<span>📚</span>
</div>

<div class="stat-card">
<div>
<h3>Total User</h3>
<h1>80</h1>
</div>
<span>👤</span>
</div>

<div class="stat-card">
<div>
<h3>Total Kategori</h3>
<h1>15</h1>
</div>
<span>🏷️</span>
</div>

</div>

<div class="card">

<h2>Kelola Ebook</h2>

<br>

<a href="/ebooks/create" class="btn">
+ Tambah Ebook
</a>

<br><br>

<table>

<tr>
<th>Judul</th>
<th>Kategori</th>
<th>Aksi</th>
</tr>

<tr>
<td>Laravel Dasar</td>
<td>Teknologi</td>
<td>
<button class="btn">
Edit
</button>
</td>
</tr>

</table>

</div>

@endsection