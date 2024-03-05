<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoribuku';
    protected $primaryKey = 'kategoriID';
    protected $guarded = [];
    protected $fillable = [
        'namakategori',
        'bukuID',
        'kategoriID'
    ];

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'kategorirelasi', 'kategoriID', 'bukuID');
    }
}
