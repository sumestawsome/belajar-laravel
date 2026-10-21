<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Kolom akun yang boleh diisi saat pendaftaran (nama, email, password)
#[Fillable(['name', 'email', 'password'])]

// Sembunyikan password dan token ingat sesi agar tidak bocor di JSON
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    // Pasang trait Sanctum agar user bisa dibuatkan token login
    use HasApiTokens, HasFactory, Notifiable;

    // Format tipe data otomatis saat dibaca dari database
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // Password otomatis di-hash biar aman di database
        ];
    }
}