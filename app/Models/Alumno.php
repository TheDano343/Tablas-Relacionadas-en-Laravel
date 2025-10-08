<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /** @use HasFactory<\Database\Factories\AlumnoFactory> */
    use HasFactory;

    protected $primaryKey = "IdAlumno";

    protected $fillable = [
        'Nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'CorreoElectronico',
        'CURP',
        'materia_id'
    ];

    public function Materia()
    {
        return $this->belongsTo(Materia::class,'materia_id','IdMateria');
    }
}
