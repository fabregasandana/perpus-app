<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

// use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'name',
        'alamat',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * The attributes that should be cast.
     *
     * @param string $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */

    public function ulasan(){
        return $this->hasMany(Ulasan::class, 'userID');
    }

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class, 'userID');
    }

    public function koleksi(){
        return $this->hasMany(Koleksi::class, 'userID');
    }
}
