<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_Remise;


class RemiseController extends Controller
{
    public function create(){
        return view('/remise.create');
    }
    public function add_remise(){

        request()->validate([
        'code_creancier' => 'required',
        'contrat' => 'required',
        'agence' => 'required',
        'type_remise' => 'required',
        'objet_remise' => 'required',
        'rs_creancier' => 'required',
        'nom_remise' => 'required',
        'app_remise' => 'required',
        'date_reception' => 'required',
        'filiale' => 'required',
        'type_agence' => 'required',
        'charge_client' => 'required',
        'nbre_dossier' => 'required'

        ]);
        $data_remise = Data_Remise::create([
        'code_creancier' => request('code_creancier'),
        'contrat' => request('contrat'),
        'agence' => request('agence'),
        'type_remise' => request('type_remise'),
        'objet_remise' => request('objet_remise'),
        'rs_creancier' => request('rs_creancier'),
        'nom_remise' => request('nom_remise'),
        'app_remise' => request('app_remise'),
        'date_reception' => request('date_reception'),
        'filiale' => request('filiale'),
        'type_agence' => request('type_agence'),
        'charge_client' => request('charge_client'),
        'nbre_dossier' => request('nbre_dossier')
        ]);
        if($data_remise){
            return redirect()->back()->with('success', 'Opération d\'ajout effectuée avec success');
        }
    }
    public function edit(Data_Remise $data){
        $data_remise = Data_Remise::all();
        return view('/remise.edit', ['data'=>$data, 'data_remise'=>$data_remise]);
    }
    public function data_edit(Data_Remise $data){
        $data_prospects = Data_Remise::all();
        // $prospects = Propect::all();
        return view('/remise.data', ['data'=>$data, 'data_prospects' => $data_prospects]);
    }
    public function update(Data_Remise  $data){
        request()->validate([
            'code_creancier' => 'required',
            'contrat' => 'required',
            'agence' => 'required',
            'type_remise' => 'required',
            'objet_remise' => 'required',
            'rs_creancier' => 'required',
            'nom_remise' => 'required',
            'app_remise' => 'required',
            'date_reception' => 'required',
            'filiale' => 'required',
            'type_agence' => 'required',
            'charge_client' => 'required',
            'nbre_dossier' => 'required'
        ]);

        $data->update([
        'code_creancier' => request('code_creancier'),
        'contrat' => request('contrat'),
        'agence' => request('agence'),
        'type_remise' => request('type_remise'),
        'objet_remise' => request('objet_remise'),
        'rs_creancier' => request('rs_creancier'),
        'nom_remise' => request('nom_remise'),
        'app_remise' => request('app_remise'),
        'date_reception' => request('date_reception'),
        'filiale' => request('filiale'),
        'type_agence' => request('type_agence'),
        'charge_client' => request('charge_client'),
        'nbre_dossier' => request('nbre_dossier')
        ]);
        return redirect('/edit_remise')->with('success', 'Modification effectuée avec succès');

    }
    public function destroy(Data_Remise $data){
        $data->delete();
        return redirect('/edit_remise');

    }
}
