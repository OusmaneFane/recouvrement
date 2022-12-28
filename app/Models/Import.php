<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_creancier',
        'nom_remise',
        'type_deb',
        'rs',
        'name',
        'size',
        'type',
        'path',
    ];
}
