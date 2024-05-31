<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    public $timestamps = false; // Desativa timestamps

    protected $primaryKey = 'idcurso'; // Especifica a chave primária


}
