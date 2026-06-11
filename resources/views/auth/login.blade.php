@extends('layouts.app')

@section('content')

<div class="card" style="max-width:500px;margin:auto">

<h1>Login LibraCoer</h1>

<br>

<input type="email" placeholder="Email">

<input type="password" placeholder="Password">

<br>

<div style="display:flex;gap:10px">

<a href="/dashboard-user" class="btn">
Masuk Sebagai User
</a>

<a href="/dashboard-admin" class="btn">
Masuk Sebagai Admin
</a>

</div>

</div>

@endsection