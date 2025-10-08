<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    /** @use HasFactory<\Database\Factories\MateriaFactory> */
    use HasFactory;

    protected $primaryKey = "IdMateria";

    protected $fillable = [
        'NombreMateria',
    ];

    public function Materia()
    {
        return $this->hasMany(Materia::class,'IdMateria','materia_id');
    }

    
}
