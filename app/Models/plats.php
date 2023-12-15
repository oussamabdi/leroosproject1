<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plats extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom_plat',
        'Prix_plat',
        'Categorie_plat',
        'img_plat'
    ];
}
