<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $guarded = [];

    public function fasilitas()
    {
        return $this->hasMany(fasilitas::class ,'id', 'idFasilitas');
    }
}
