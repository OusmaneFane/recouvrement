<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'identifiant', 'nom',
        'adresse', 'telephone', 
        'email', 'infofinancieres',
        'detailsdupret', 'infopaiement', 
        'historique', 'statutcreance'
    ];
}
