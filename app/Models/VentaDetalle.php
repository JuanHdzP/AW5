<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaDetalle extends Model
{
    //
    protected $table = 'ventas_detalle';

    protected $fillable = [
        'fecha',
        'vendedor_id',
        'cliente_id',
        'venta_id'
        ];
    }
