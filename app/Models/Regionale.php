<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regionale extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_regional',
        'cantidad_bicicletas'
    ];
}
