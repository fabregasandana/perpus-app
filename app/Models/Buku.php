<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'bukuID';
    protected $guarded = [];

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'userID', 'bukuID');
    }

    public function koleksi()
    {
        return $this->hasMany(Koleksi::class, 'user_id', 'buku_id');
    }
}
