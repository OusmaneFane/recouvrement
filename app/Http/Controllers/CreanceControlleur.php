<?php

namespace App\Http\Controllers;

use App\Models\Debiteur;
use Illuminate\Http\Request;

class CreanceControlleur extends Controller
{
    public function add(){
        return view('/debiteur.create');
    }
    public function send_data(){
        request()->validate([
        'type' => 'required',
        'code_debiteur' => 'required',
        'pays' => 'required',
        'forme_juridique' => 'required',
        'secteur_activite' => 'required',
        'rc' => 'required',
        'nom_resp',
        'raison_sociale'=> 'required',
        'activite' => 'required',
        'mf_ref' => 'required',
        'prenom_resp' => 'required',
        'abrev' => 'required',
        'designation' => 'required',
        'type_tva' => 'required',
        'qua_resp' => 'required',
        ]);
        $data = Debiteur::create([
            'type' => request('type'),
            'code_debiteur' => request('code_debiteur'),
            'pays' => request('pays'),
            'forme_juridique' => request('forme_juridique'),
            'secteur_activite' => request('secteur_activite'),
            'rc' => request('rc'),
            'nom_resp' => request('nom_resp'),
            'raison_sociale' => request('raison_sociale'),
            'activite'=> request('activite'),
            'mf_ref' => request('mf_ref'),
            'prenom_resp' => request('prenom_resp'),
            'abrev' => request('abrev'),
            'designation' => request('designation'),
            'type_tva' => request('type_tva'),
            'qua_resp' => request('qua_resp'),

        ]);
        if ($data) {
            return redirect()->back()->with('success', 'Opération d\'ajout effectuée avec succès');
        }
    }
}
