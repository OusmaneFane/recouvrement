<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rappel_Paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_envoi',
        'contenu',
        'id_creance',
    ];
}
