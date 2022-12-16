<?php

namespace App\Http\Controllers;

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
        $type_contrat = $request->prospect_type;
        if($type_contrat == 'type1'){
            return redirect('/prospect/data')->with('success', 'Opération ajoutée avec succès');
        }
        // else{
        //     return('oupsss');
        // }
    }
    public function data2(){
        return view('/prospect.data');
    }
   
}
