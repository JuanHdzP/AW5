<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;


class Venta extends MongoModel
{
    //
    use HasFactory;

    protected $table = 'ventas';

    protected $fillable = [
        'cantidad',
        'precio',
        'producto_id'
        ];
    }
