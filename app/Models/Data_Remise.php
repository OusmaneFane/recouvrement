<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Remise extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_creancier',
        'contrat',
        'agence',
        'type_remise',
        'objet_remise',
        'rs_creancier',
        'nom_remise',
        'app_remise',
        'date_reception',
        'filiale',
        'type_agence',
        'charge_client',
        'nbre_dossier'
    ];
}
