<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Estudiante as Authenticatable;

class Estudiantes extends Model
{
    use HasFactory, HasApiTokens,Notifiable;
    protected $primaryKey = 'id_estudiante';
    
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'sexo',
        'foto',
        'id_usuario',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
    public function sesiones()
    {
        return $this->hasMany(sesion::class, 'id_estudiante');
    }
}
