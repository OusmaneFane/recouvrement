<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use Illuminate\Http\Request;

// Dans le controlleur

class DossierController extends Controller
{
    public function index()
    {
        // Récupération de tous les dossiers de créance depuis la base de données
        $dossiers = Dossier::all();

        return view('dossiers.index', ['dossiers' => $dossiers]);
    }

    public function create()
    {
        return view('dossiers.create');
    }

    public function store(Request $request)
    {
        // Validation des données de formulaire
        $request->validate([
            'nom' => 'required',
            'montant' => 'required|numeric',
            'date_echeance' => 'required|date',
        ]);

        // Création d'un nouveau dossier de créance en utilisant les données de formulaire
        $dossier = new Dossier([
            'nom' => $request->get('nom'),
            'montant' => $request->get('montant'),
            'date_echeance' => $request->get('date_echeance'),
        ]);

        $dossier->save();

        return redirect('/dossiers')->with('success', 'Dossier de créance créé avec succès');
    }

    public function show($id)
    {
        $dossier = Dossier::find($id);

        return view('dossiers.show', ['dossier' => $dossier]);
    }

    public function edit($id)
    {
        $dossier = Dossier::find($id);

        return view('dossiers.edit', ['dossier' => $dossier]);
    }

    public function update(Request $request, $id)
    {
        // Validation des données de formulaire
        $request->validate([
            'nom' => 'required',
            'montant' => 'required|numeric',
            'date_echeance' => 'required|date',
        ]);

        // Mise à jour d'un dossier de créance existant en utilisant les données de formulaire
        $dossier = Dossier::find($id);
        $dossier->nom = $request->get('nom');
        $dossier->montant = $request->get('montant');
        $dossier->date_echeance = $request->get('date_echeance');
        $dossier->save();

        return redirect('/dossiers')->with('success', 'Dossier de créance mis à jour avec succès');
    }

    public function destroy($id)
    {
        $dossier = Dossier::find($id);
        $dossier->delete();

        return redirect('/dossiers')->with('success', 'Dossier de créance supprimé avec succès');
    }

}

