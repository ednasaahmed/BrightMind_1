<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    use HasFactory;

    protected $table = 'disponibilidad_tutor';

    protected $fillable = [
        'id_tutor',
        'fecha',
        'hora_inicio',
        'hora_fin',
    ];

    public function tutor()
    {
        return $this->belongsTo(Tutores::class);
    }
}
