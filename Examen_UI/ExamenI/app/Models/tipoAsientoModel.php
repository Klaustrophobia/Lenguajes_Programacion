<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoAsientoModel extends Model
{
    protected $table = ('tipoAsiento');
    protected $fillable = ['descripcion', 'precio', 'estado'];
}
