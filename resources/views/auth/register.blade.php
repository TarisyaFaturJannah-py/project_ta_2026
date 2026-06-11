@extends('layouts.app')

@section('content')

<div class="card" style="max-width:450px;margin:auto">

<h1>Daftar Akun</h1>

<form>

<label>Nama</label>
<input type="text">

<label>Email</label>
<input type="email">

<label>Password</label>
<input type="password">

<button class="btn">
Daftar
</button>

</form>

</div>

@endsection