<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;


class TypeUser extends MongoModel
{
    //
    use HasFactory;

    protected $table = 'type_user';

    protected $fillable = [
        'nombre'
        ];
    }