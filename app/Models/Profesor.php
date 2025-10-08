<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    /** @use HasFactory<\Database\Factories\ProfesorFactory> */
    use HasFactory;

    protected $primaryKey = "IdProfesor";

    protected $fillable = [
        'Nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'CorreoElectronico',
        'CedulaProfesional',
        'CURP',
        'materia_id'
    ];

    public function Materia()
    {
        return $this->belongsTo(Materia::class,'materia_id','IdMateria');
    }
}
