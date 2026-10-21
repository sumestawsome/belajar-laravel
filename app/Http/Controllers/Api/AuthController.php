<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Daftar akun user baru
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|string|email|max:150|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return response()->json([
            'message' => 'Registrasi akun berhasil!',
            'user'    => $user,
        ], 201);
    }

    // Masuk akun dan dapatkan token akses Sanctum
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        // Cek kecocokan email dan password
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Email atau password salah.'],
            ]);
        }

        // Terbitkan token bearer baru
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message'    => 'Login berhasil!',
            'token'      => $token,
            'token_type' => 'Bearer',
        ]);
    }

    // Cek profil data user yang sedang aktif login
    public function profile(Request $request)
    {
        return response()->json($request->user());
    }

    // Keluar akun dan hapus token aktif
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout berhasil, token telah dihapus.'
        ]);
    }
}