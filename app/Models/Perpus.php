<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Perpus extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'bukuID';
    protected $guarded = [];

    // public function namakategori(){
    //     return $this->hasOne(Kategori::class, "id", "");
    // }

    public function ulasan():HasMany
    {
        return $this->hasMany(Ulasan::class);
    }
}
