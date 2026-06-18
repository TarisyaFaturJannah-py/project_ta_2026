@extends('layouts.app')

@section('content')

<div class="card" style="max-width:500px;margin:auto;margin-top:25px">

    <h1 style="margin-bottom:20px">
        Login LibraCoer
    </h1>

    <input
        type="email"
        placeholder="Masukkan Email"
    >

    <input
        type="password"
        placeholder="Masukkan Password"
    >

    <a
        href="/dashboard-user"
        class="btn"
        style="
            width:100%;
            text-align:center;
            display:block;
            margin-top:10px;
        "
    >
        Login
    </a>

    <div style="text-align:center;margin-top:20px">

        <p style="margin-bottom:10px;color:#666">
            Belum punya akun?
        </p>

        <a href="/register" class="btn">
            Daftar Akun
        </a>

    </div>

</div>

@endsection