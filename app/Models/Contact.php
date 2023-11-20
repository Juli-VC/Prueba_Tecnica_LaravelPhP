<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contactos'; // Nombre de la tabla en la base de datos

    protected $fillable = ['name', 'email', 'address', 'message']; 
}