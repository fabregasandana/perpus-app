<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;

    protected $table = 'koleksi';
    protected $fillable = [
        'userID',
        'bukuID',
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'bukuID', 'koleksiID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'koleksiID');
    }
}
