<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquilere extends Model
{
    use HasFactory;


    protected $fillable = [
        'hora_inicio',
        'hora_fin',
        'documento',
        'bicicleta_id'
    ];
    
}
