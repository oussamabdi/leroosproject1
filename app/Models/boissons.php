<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boissons extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom_boisson',
        'Prix_boisson',
        'Categorie_boisson',
        'img_boisson'
    ];
}
