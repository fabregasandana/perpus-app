<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Ulasan extends Model
{
    use HasFactory;

    protected $table = 'ulasanbuku';

    protected $fillable = [
        'userID',
        'bukuID',
        'ulasan',
        'rating'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'bukuID', 'bukuID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'id');
    }
}
