<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debiteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'code_debiteur',
        'pays',
        'forme_juridique',
        'secteur_activite',
        'rc',
        'nom_resp',
        'raison_sociale',
        'activite',
        'mf_ref',
        'prenom_resp',
        'abrev',
        'designation',
        'type_tva',
        'qua_resp',
    ];
}
