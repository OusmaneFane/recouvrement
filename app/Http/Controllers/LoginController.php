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


            return redirect()->route('dashboard2');
        }

        return back()->withErrors([
            'email' => 'Les informations de connexion sont incorrectes.',
        ]);
    }


    public function dash(){
        return view('dashboard');
    }

        public function logout()
        {
            if (!auth()->user()->google2fa_secret) {
                session()->forget('2fa_token');
                auth()->logout();
                return redirect('login')->with('fail', 'Vous avez été déconnecté en raison d\'une erreur d\'authentification à deux facteurs.');
            }
            if(session()->has('PasseUser')){
                session()->pull('PasseUser');
                auth()->logout();
                return redirect('/');
            }else{
                auth()->logout();
                return redirect('/');
            }
        }
        public function dash2(){
            return view('dashboard2');
        }


}
