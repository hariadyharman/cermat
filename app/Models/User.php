<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Kolom yang bisa diisi mass assignment.
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
    ];

    /**
     * Kolom yang harus disembunyikan ketika model dikonversi ke array / JSON.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casting otomatis tipe data.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password'          => 'hashed', // ✅ Laravel 10+ bisa otomatis hash password
    ];

    /**
     * Relasi ke model Post
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
