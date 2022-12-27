<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creance extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_creance', 
        'nature_creance', 
        'ecr', 
        'mp', 
        'remise', 
        'decote', 
        'statut', 
        'action', 
        'date_recep', 
        'total', 
        'mci', 
        'abandon', 
        'code_client', 
        'objet', 
        'int_recep', 
        'nbre_dossier'
     ];
}
