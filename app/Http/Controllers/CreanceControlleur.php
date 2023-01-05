<?php

namespace App\Http\Controllers;

use App\Models\Import;
use App\Models\Creance;
use App\Models\Debiteur;
use App\Models\Add_creance;
use App\Models\Data_Remise;
use Illuminate\Http\Request;
use App\Models\Import_creance;
use Illuminate\Support\Facades\DB;

class CreanceControlleur extends Controller
{
    public function add(Debiteur $data){

        return view('/debiteur.create', ['data'=>$data]);
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
    public function add_creance(Request $request, Debiteur $data){



        // $type = $request->input('personne');
        // $code_debiteur = $request->input('code');

        // $results = Debiteur::where(function($query) use ($type, $code_debiteur) {
        //     if ($type) {
        //         $query->where('type', $type);
        //     }
        //     if ($code_debiteur) {
        //         $query->where('code_debiteur', $code_debiteur);
        //     }
        // })->get();
        $data_debit = Debiteur::all();

        return view('/debiteur.add_creance', ['data_debit'=>$data_debit, 'request'=>$request, 'data'=>$data]);
    }
    public function data_edit(Debiteur $data){
        $data_debit = Debiteur::all();
        return view('/debiteur.data_creance', ['data'=>$data, 'data_debit'=>$data_debit]);
    }
    public function send_creance(){
        request()->validate([
        'code_creance' => 'required',
        'nature_creance' => 'required',
        'ecr'=> 'required',
        'mp'=> 'required',
        'remise'=> 'required',
        'decote'=> 'required',
        'statut'=> 'required',
        'action'=> 'required',
        'date_recep'=> 'required',
        'total'=> 'required',
        'mci'=> 'required',
        'abandon'=> 'required',
        'code_client'=> 'required',
        'objet'=> 'required',
        'int_recep'=> 'required',
        'nbre_dossier' => 'required'
        ]);
        $data = Creance::create([
            'code_creance' => request('code_creance'),
            'nature_creance' => request('nature_creance'),
            'ecr' => request('ecr'),
            'mp' => request('mp'),
            'remise' => request('remise'),
            'decote' => request('decote'),
            'statut' => request('statut'),
            'action' => request('action'),
            'date_recep'=> request('date_recep'),
            'total' => request('total'),
            'mci' => request('mci'),
            'abandon' => request('abandon'),
            'code_client' => request('code_client'),
            'objet' => request('objet'),
            'int_recep' => request('int_recep'),
            'nbre_dossier' => request('nbre_dossier')
        ]);
        if($data){
            return redirect()->back()->with('success', 'Opération effectuée avec succès');
        }
    }
    public function view_import(){
        return view('/debiteur.import');
    }
    public function import_creance(Request $request){

                // Valider les données du formulaire
                request()->validate([
                    'file' => 'required|file|max:1024', // Taille maximale du fichier : 1 Mo
                    'code_creancier' => 'required',
                    'nom_remise'=> 'required',
                    'type_deb'=> 'required',
                    'rs'=> 'required',
                ]);

                // Récupérer le fichier téléchargé
                $file = $request->file('file');


                // Déplacer le fichier dans le répertoire de stockage
                $path = $file->store('uploads');

                // Enregistrer les informations du fichier dans la base de données
             $data = Import::create([
                    'code_creancier' => request('code_creancier'),
                    'nom_remise' => request('nom_remise'),
                    'type_deb' => request('type_deb'),
                    'rs' => request('rs'),
                    'name' => $file->getClientOriginalName(),
                    'size' => $file->getSize(),
                    'type' => $file->getMimeType(),
                    'path' => $path,
                ]);


                // Rediriger l'utilisateur vers la page de destination
                return redirect()->back()->with('success', 'File uploaded successfully');

    }

    public function hist(){
            $data = DB::table('data__remises')
            ->join('creances', 'data__remises.code_creancier', '=', 'creances.code_creance')
            ->join('imports', 'data__remises.code_creancier', '=', 'imports.code_creancier')
            ->select('data__remises.code_creancier as code_creancier_remises', 'creances.code_creance as code_creance_creances', 'imports.*')
            ->get();





        return view('/debiteur.historique', ['data'=>$data]);
    }

}
