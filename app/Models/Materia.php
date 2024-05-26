<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materia';

    protected $primaryKey = 'id_materia';
    protected $fillable = [
        'Nombre',
        'Descripcion',
    ];

    public function tutores()
    {
        return $this->belongsToMany(Tutores::class, 'materia_tutor', 'id_materia', 'id_tutor')->withPivot('precio');
    }
}
