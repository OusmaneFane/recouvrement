<?php

namespace App\Http\Controllers;

use App\Models\Data_Prospect;
use App\Models\Propect;
use Illuminate\Http\Request;

class ProspectController extends Controller
{
    public function page(Request $request){
        $prospects = Propect::all();

        return view('/prospect.page', ['prospects' => $prospects] );
    }
    public function data(Request $request){
        $prospects = Propect::all();
        $data2 = Data_Prospect::all();
        $type_contrat = $request->prospect_type;

            return view('/prospect/data', ['prospects' => $prospects, 'data2'=>$data2])->with('success', 'Opération ajoutée avec succès');


    }
    public function data2(Data_Prospect $data){
        $prospects = Propect::all();

        return view('/prospect.create', ['prospects' => $prospects, 'data'=>$data]);
    }
    public function send_data(){
        $prospects = Propect::all();
        request()->validate([
            'prospect_type' => 'required',
            'nature' => 'required',
            'apporteur' => 'required',
            'statut' => 'required',
            'pays' => 'required',
            'type_apporteur' => 'required',
            'charge_client' => 'required',
            'capital' => 'required',
            'forme_juridique' => 'required',
            'secteur_activite' => 'required',
            'rc' => 'required',
            'nom_resp' => 'required',
            'raison_sociale' => 'required',
            'activite' => 'required',
            'mf_ref' => 'required',
            'prenom_resp' => 'required',
            'abrev' => 'required',
            'designation' => 'required',
            'type_tva' => 'required',
            'qua_resp' => 'required',


        ]);

          $data =  Data_Prospect::create([
            'prospect_type' => request('prospect_type'),
            'nature' => request('nature'),
            'apporteur' =>request('apporteur'),
            'statut' =>request('statut'),
            'pays' =>request('pays'),
            'type_apporteur' =>request('type_apporteur'),
            'charge_client' =>request('charge_client'),
            'capital' =>request('capital'),
            'forme_juridique' =>request('forme_juridique'),
            'secteur_activite' =>request('secteur_activite'),
            'rc' =>request('rc'),
            'nom_resp' =>request('nom_resp'),
            'raison_sociale' =>request('raison_sociale'),
            'activite' =>request('activite'),
            'mf_ref' =>request('mf_ref'),
            'prenom_resp' =>request('prenom_resp'),
            'abrev' =>request('abrev'),
            'designation' =>request('designation'),
            'type_tva' =>request('type_tva'),
            'qua_resp' =>request('qua_resp'),

        ]);
        if($data){
            return redirect('/edit')->with('sucess', 'Opération réussi avec succès');
        }

    }
    public function edit(Data_Prospect $data){
        $prospects = Propect::all();
        $data_prospects = Data_Prospect::all();
        return view('/prospect.edit', ['data'=>$data, 'prospects' => $prospects, 'data_prospects' => $data_prospects]);

    }
    public function data_edit(Data_Prospect $data){
        $data_prospects = Data_Prospect::all();
        $prospects = Propect::all();
        return view('/prospect.data', ['data'=>$data, 'data_prospects' => $data_prospects, 'prospects'=>$prospects]);
    }
    public function update(Data_Prospect $data){
        request()->validate([
            'prospect_type' => 'required',
            'nature' => 'required',
            'apporteur' => 'required',
            'statut' => 'required',
            'pays' => 'required',
            'type_apporteur' => 'required',
            'charge_client' => 'required',
            'capital' => 'required',
            'forme_juridique' => 'required',
            'secteur_activite' => 'required',
            'rc' => 'required',
            'nom_resp' => 'required',
            'raison_sociale' => 'required',
            'activite' => 'required',
            'mf_ref' => 'required',
            'prenom_resp' => 'required',
            'abrev' => 'required',
            'designation' => 'required',
            'type_tva' => 'required',
            'qua_resp' => 'required',
        ]);

        $data->update([
            'prospect_type' => request('prospect_type'),
            'nature' => request('nature'),
            'apporteur' =>request('apporteur'),
            'statut' =>request('statut'),
            'pays' =>request('pays'),
            'type_apporteur' =>request('type_apporteur'),
            'charge_client' =>request('charge_client'),
            'capital' =>request('capital'),
            'forme_juridique' =>request('forme_juridique'),
            'secteur_activite' =>request('secteur_activite'),
            'rc' =>request('rc'),
            'nom_resp' =>request('nom_resp'),
            'raison_sociale' =>request('raison_sociale'),
            'activite' =>request('activite'),
            'mf_ref' =>request('mf_ref'),
            'prenom_resp' =>request('prenom_resp'),
            'abrev' =>request('abrev'),
            'designation' =>request('designation'),
            'type_tva' =>request('type_tva'),
            'qua_resp' =>request('qua_resp'),
        ]);
        return redirect('/edit')->with('success', 'Modification effectuée avec succès');

    }
    public function destroy(Data_Prospect $data){
        $data->delete();
        return redirect('/edit');

    }

}
