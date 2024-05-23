<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sesion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tutor',
        'id_estudiante',
        'fecha',
        'id_materia',
        'estado',
    ];

    protected $casts = [
        'fecha' => 'datetime',
    ];

    public function estudiante()
    {
        return $this->hasOne(Estudiantes::class, 'id_estudiante');
    }

    public function tutor()
    {
        return $this->hasOne(Tutores::class, 'id_tutor');
    }
}
