<?php

namespace App\Models;

use App\Models\Creance;
use App\Models\Paiement;
use App\Models\Emprunteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Creance_Emprunt extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant',
        'date_dette',
        'date_echeance',
        'id_emprunteur',
    ];
    public function emprunteur()
    {
        return $this->belongsTo(Emprunteur::class,'id_emprunteur', 'identifiant', 'nom');
    }
    public function paiement()
{
    return $this->hasMany(Paiement::class, 'id_creance');
}
    public function creance_emprunt()
    {
        return $this->belongsTo(Creance_Emprunt::class);
    }
    public function creance()
{
    return $this->belongsTo(Creance_Emprunt::class);
}



}
