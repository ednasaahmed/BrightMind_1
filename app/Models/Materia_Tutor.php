<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia_Tutor extends Model
{
    protected $table = 'materia_tutor';

    protected $primaryKey = 'id';
    protected $fillable = [
        'id_materia',
        'id_tutor',
        'precio',
    ];


}
