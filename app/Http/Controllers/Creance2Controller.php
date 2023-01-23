<?php

namespace App\Http\Controllers;

use App\Models\Creance;
use App\Models\Paiement;
use App\Models\Rappel_Paiement;
use Illuminate\Http\Request;
use App\Models\Creance_Emprunt;

class Creance2Controller extends Controller
{
    public function add_creance2()
    {

        return view('/creances2.create');
    }
    public function send_creance2(Request $request)
    {
        $request->validate([
            'montant' => 'required',
            'date_dette' => 'required',
            'date_echeance' => 'required',
            'id_emprunteur' => 'required',
        ]);
        $data = Creance_Emprunt::create(
            [
                'montant' => request('montant'),
                'date_dette' => request('date_dette'),
                'date_echeance' => request('date_echeance'),
                'id_emprunteur' => request('id_emprunteur'),
            ]
        );

        if ($data) {
            return redirect()->back()->with('success', 'Créance ajoutée avec succès');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de l\'ajout de la créance');
        }


    }
    public function paie()
    {
        return view('/creances2.paiement');
    }
    public function send_paie(Request $request)
    {
        $request->validate([
            'montant' => 'required',
            'date_paiement' => 'required',
            'id_creance' => 'required',
        ]);
        $data = Paiement::create(
            [
                'montant' => request('montant'),
                'date_paiement' => request('date_paiement'),
                'id_creance' => request('id_creance'),
            ]
        );

        if ($data) {
            return redirect()->back()->with('success', 'Paiement ajouté avec succès');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de l\'ajout du paiement');
        }


    }
    public function edit_creance2(Paiement $data)
    {

        $creances = Creance_Emprunt::with(['emprunteur', 'paiement'])->get();
        return view('creances2.edit', compact('creances', 'data'));

    }
    public function data_edit($id)
    {
        $pay = Paiement::all();
        $creance = Creance_Emprunt::with(['emprunteur', 'paiement'])->find($id);
        return view('creances2.data_edit', compact('creance', 'pay'));
    }
    public function rappel()
    {

        return view('/creances2.rappel');
    }
    public function send_rappel(Request $request)
    {
        $request->validate([
            'date_envoi' => 'required',
            'contenu' => 'required',
            'id_creance' => 'required',
        ]);
        $data = Rappel_Paiement::create(
            [
                'date_envoi' => request('date_envoi'),
                'contenu' => request('contenu'),
                'id_creance' => request('id_creance'),
            ]
        );

        if ($data) {
            return redirect()->back()->with('success', 'Rappel ajouté avec succès');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de l\'ajout du rappel');
        }
    }
}
