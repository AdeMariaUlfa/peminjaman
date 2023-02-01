<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';
    protected $guarded = [];

    public function peminjaman()
    {
        return $this->hasOne(peminjaman::class,'idFasilitas','id');
    }
}
