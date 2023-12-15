<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tables extends Model
{
    use HasFactory;
    protected $fillable = [
        'Type_table',
        'img_table',
        'Prix_table'
    ];
}
