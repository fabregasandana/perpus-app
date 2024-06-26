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
        return $this->hasMany(Ulasan::class, 'bukuID');
    }

    public function koleksi()
    {
        return $this->belongsToMany(Koleksi::class, 'bukuID');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'bukuID', 'bukuID');
    }

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'kategorirelasi', 'kategoriID', 'kategoriID');
    }
}
