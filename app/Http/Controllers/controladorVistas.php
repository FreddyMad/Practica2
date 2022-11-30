<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiaria;

class controladorVistas extends Controller
{
    public function showHome(){
        return view('home');
    }

    public function showIngresar(){
        return view('registrar');
    }

    public function showRecuerdos(){
        return view('recuerdo');
    }

    public function showWelcome(){
        return view('welcome');
    }

    public function procesarRecuerdo(validadorDiaria $req){
        return redirect('Registrar')->with('confirmacion','Llego correctamente');
        //return 'Su recuerdo esta siendo procesado';
        //return $req->all();
        //return $req->path();
        // return $req->url();
        //return $req->ip();
    }

}
