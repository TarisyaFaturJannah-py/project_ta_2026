<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // 1. Validasi input: Pastikan email belum terpakai
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        // 2. Simpan user baru ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Password dikunci (hash)
        ]);

        return response()->json([
            'status' => 'Sukses!',
            'pesan' => 'Akun berhasil dibuat. Silakan login.',
            'user' => $user
        ], 201);
    }
}