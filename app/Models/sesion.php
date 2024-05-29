<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sesion extends Model
{
    use HasFactory;

    protected $table = 'sesion';
    protected $primaryKey = 'id_sesion';

    protected $fillable = [
        'id_tutor',
        'id_estudiante',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'id_materia',
        'estado',
    ];

    protected $casts = [
        'fecha' => 'datetime' ,
    ];
    

   /* public function estudiante()
    {
        return $this->hasOne(Estudiantes::class, 'id_estudiante');
    }

    public function tutor()
    {
        return $this->hasOne(Tutores::class, 'id_tutor');
    }*/
    public function tutores()
    {
        return $this->belongsTo(Tutores::class, 'id_tutor');
    }

    public function estudiantes()
    {
        return $this->belongsTo(Estudiantes::class, 'id_estudiante');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'id_materia');
    }
}
