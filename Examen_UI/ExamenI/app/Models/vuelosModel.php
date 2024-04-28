<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vuelosModel extends Model
{
    protected $table = 'vuelos';
    protected $primaryKey = 'idVuelo';
    public $incrementing = false;
    private $keytype = 'string';
    private $fillabe = ['numeroVuelo', 'origen', 'destino', 'numeroAsiento', 'fechaSalida'];
}
