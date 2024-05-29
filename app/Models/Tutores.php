<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutores extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tutor';
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'sexo',
        'grado',
        'descripcion',
        'foto',
        'id_usuario',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function disponibilidad()
    {
        return $this->hasMany(Disponibilidad::class, 'id_tutor');
    }

    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'materia_tutor', 'id_tutor', 'id_materia')->withPivot('precio');
    }

    
    public function sesiones()
    {
        return $this->hasMany(sesion::class, 'id_tutor');
    }

}

