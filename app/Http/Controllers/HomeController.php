<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\persona;
use App\encuesta;
use App\evaluador_evaluado;
use App\encuesta_cargo;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->check()){
            $rol = Auth::user()->rol;
            $id = Auth::User()->id;

            if($rol == 'admin'){
                return view('home');            
            }
            elseif ($rol == 'evaluado') {
                return view('homeevaluado');   
            }
            else{    
                
                $persona = persona::where('idusuario', '=', $id)->first();
                $a = $persona->id;
                $idcar = evaluador_evaluado::where('idpersona', '=', $a)->first();
                $idc = $idcar->idcargo;
                $idencu = encuesta_cargo::where('idcargo', '=', $idc)->first();
                $ide = $idencu->idencuesta;
                $encu = encuesta::where('id', '=', $ide)->get();
                return view('homeevaluador')->with(['encuestas' => $encu]);   
            }
            
        }
    }
}
