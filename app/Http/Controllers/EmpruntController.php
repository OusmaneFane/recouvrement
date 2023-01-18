<?php

namespace App\Http\Controllers;

use App\Models\Emprunteur;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{
    public function add_emprunt()
    {
        return view('/emprunts.create');
    }
    public function edit_emprunt(Emprunteur $data)
    {
        $emprunt = Emprunteur::all();
        return view('/emprunts.edit_emprunt', ['data' => $data, 'emprunt' => $emprunt]);

    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'identifiant' => 'required|string',
            'nom' => 'required|string',
            'adresse' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'infofinancieres' => 'required|string',
            'detailsdupret' => 'required|string',
            'infopaiement' => 'required|string',
            'historique' => 'required|string',
            'statutcreance' => 'required|string',
        ]);

        $data = Emprunteur::create([
            'identifiant' => $request->identifiant,
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'infofinancieres' => $request->infofinancieres,
            'detailsdupret' => $request->detailsdupret,
            'infopaiement' => $request->infopaiement,
            'historique' => $request->historique,
            'statutcreance' => $request->statutcreance,
        ]);
        if ($data) {
            return redirect()->back()->with('success', 'Emprunteur ajouté avec succès.');
        } else {
            return redirect()->back()->with('fail', 'Une erreur s\'est produite.');
        }

    }
    public function data_edit(Emprunteur $data)
    {
        $emprunt = Emprunteur::all();

        return view('/emprunts.data_emprunt', ['data' => $data, 'emprunt' => $emprunt]);
    }

    public function update( Emprunteur $data)
    {
        request()->validate([
            'identifiant' => 'required|string',
            'nom' => 'required|string',
            'adresse' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'infofinancieres' => 'required|string',
            'detailsdupret' => 'required|string',
            'infopaiement' => 'required|string',
            'historique' => 'required|string',
            'statutcreance' => 'required|string',
        ]);

        $data->update([
            'identifiant' =>  request('identifiant'),
            'nom' =>  request('nom'),
            'adresse' =>  request('adresse'),
            'telephone' =>  request('telephone'),
            'email' =>  request('email'),
            'infofinancieres' =>  request('infofinancieres'),
            'detailsdupret' =>  request('detailsdupret'),
            'infopaiement' =>  request('infopaiement'),
            'historique' =>  request('historique'),
            'statutcreance' =>  request('statutcreance'),
        ]);
        
            return redirect('/edit_emprunt')->with('success', 'Modification réussi avec succès.');
         


    }
    public function destroy(Emprunteur $data){
        $data->delete();
        return redirect('/edit_emprunt');

    }

}