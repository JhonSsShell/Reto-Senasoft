<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'direccion',
        'longitud',
        'altura',
        'telefono_centro',
        'regional_id'
    ];
}
