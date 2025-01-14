<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = [
        'usuario','nombre',
        'apellido','correo',
         'passwrd','create_time'
    ];
}
