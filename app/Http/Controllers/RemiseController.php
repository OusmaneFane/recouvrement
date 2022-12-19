<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemiseController extends Controller
{
    public function create(){
        return view('/remise.create');
    }
}
