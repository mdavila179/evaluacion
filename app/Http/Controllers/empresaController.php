<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;    
use Illuminate\Http\Request;
use App\empresa;
use View;

class empresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $empresa = empresa::orderBy('id', 'desc')->get();       
       return view('empresa.indexEmpresa', ['empresas' => $empresa]);       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $empresa = new empresa();           
            $empresa->ruc = $request->name;
            $empresa->razon_social = $request->razon;
            $empresa->USER_creadopor = auth()->user()->name;
            $empresa->save();
            return view('empresa.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = empresa::where('id', '=', $id)->get();;
        return response()->json($empresa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empresa = empresa::findOrFail($id);                       
        $empresa->ruc = $request->ruc;
        $empresa->razon_social = $request->nombre;
        $empresa->USER_modificadopor = auth()->user()->name;
        $empresa->save();
        return view("mensajes.msj_correcto")->with("msj","Se actualizó correctamente"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = empresa::find($id);
        $empresa->delete();
        return response()->json(1);
    }
 
}
