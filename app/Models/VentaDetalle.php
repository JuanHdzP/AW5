<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;


class VentaDetalle extends MongoModel
{
    //
    use HasFactory;

    protected $table = 'ventas_detalle';

    protected $fillable = [
        'fecha',
        'vendedor_id',
        'cliente_id',
        'venta_id'
        ];
    }
