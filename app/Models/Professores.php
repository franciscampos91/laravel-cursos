<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professores extends Model
{
    use HasFactory;

    public $timestamps = false; // Desativa timestamps
    protected $primaryKey = 'idprofessor'; // Especifica a chave primária
}
