<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'Id_table',
        // 'Nom_et_Prenom',
        // 'email',
        'numero',
        'Type_reservation',
        // 'nombre_personnes',
        'Date_reservation',
        'Heure_reservation',
        // Ajoutez d'autres champs fillable selon vos besoins
    ];
}
