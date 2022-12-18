<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Prospect extends Model
{
    use HasFactory;
    protected $fillable =[
        'prospect_type', 'nature', 'apporteur', 'statut', 'pays', 
        'type_apporteur', 'charge_client', 'capital', 'forme_juridique', 'secteur_activite', 
        'rc', 'nom_resp', 'raison_sociale','activite', 'mf_ref', 
        'prenom_resp','abrev', 'designation', 'type_tva', 'qua_resp', 
        
    ];
}
