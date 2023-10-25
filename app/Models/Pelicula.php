<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    public $table = 'pelicula';
    public $timestamps = false;

    protected $primaryKey = 'codigoPelicula';
    public $incrementing = false;
}
