<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nikah extends Model
{
    use HasFactory;
    protected $table = 'nikah';
    protected $guarded = ['id'];
}
