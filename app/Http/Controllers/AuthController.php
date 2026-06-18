<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // 1. Validasi Input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. Gunakan Auth::attempt (Cara Laravel untuk mengecek email & password sekaligus)
        // Ini otomatis mengecek Hash secara benar, jadi tidak perlu Hash::check manual
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            // Buatkan Token
            $token = $user->createToken('login_token')->plainTextToken;

            return response()->json([
                'status' => 'Sukses!',
                'token' => $token,
                'user' => $user
            ], 200);
        }

        // 3. Jika gagal
        return response()->json([
            'status' => 'Gagal',
            'pesan' => 'Email atau password salah.'
        ], 401);
    }
}