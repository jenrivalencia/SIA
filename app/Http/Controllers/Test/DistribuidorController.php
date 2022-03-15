<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test; 
use Illuminate\Support\Facades\Validator;

class DistribuidorController extends Controller
{
    public function index(){

        $distribuidores=Test::query()->paginate(5);
        return view('Test.index',compact('distribuidores'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    public function create(){
        return view('Test.create');
    }

    public function store(Request $request){

        $validacion = Validator::make($request->all(),['compania'=>'required|unique:distribuidor',
        'tirular'=>'titular',
        'telefono'=>'required',
        'correo'=>'required']);

        if($validacion->fails()){
            return redirect()->route('distribuidor.index')->with('error','Tiene campos vacios o ya existe');
        }

        Test::create($request->all());
        return redirect()->route('distribuidor.index')->with('success','Distribuidor agegado correctamente');

    }

public function edit(Test $distribuidor){
    return view('Test.edit',compact('distribuidor'));


}

public function update(Request $request,Test $distribuidor){
   
    $distribuidor->update($request->all());
    return redirect()->route('distribuidor.index')->with('success','Distribuidor se actualizo correctamente');

}

}