<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 'penduduk';
    protected $guarded = ['id'];

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'desa_id');
    }
}
