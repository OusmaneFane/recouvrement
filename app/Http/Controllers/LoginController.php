<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function check(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $userInfo = DB::table('users')
        ->where('name', $request->name )
        ->first();
        $credentials = $request->only(['name', 'password']);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Authentication passed...
            $request->session()->put('PasseUser', $userInfo->id);

           
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Les informations de connexion sont incorrectes.',
        ]);
    }
    public function dash(){
        return view('dashboard');
    }
}
