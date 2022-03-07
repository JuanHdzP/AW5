<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    //
    protected $table = 'type_user';

    protected $fillable = [
        'nombre'
        ];
    }