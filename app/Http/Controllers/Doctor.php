<?php

namespace App\Http\Controllers;

use App\Models\Doctores;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class Doctor extends Controller
{
    //
    public function index(){
        $doctores= Doctores::getList();
        return view('doctores.index',compact('doctores'));
    }
    public function create(){
        return view('doctores.crear');
    }
    public function store(Request $request){
        $doctor= new Doctores();
        $doctor->nombres=$request->nombres;
        $doctor->apellidos=$request->apellidos;
        $doctor->especialidad=$request->especialidad;
        $doctor->save();
        return redirect()->route('doctores.index');
    }
    public function editarFormulario($id){
        $doctor=Doctores::find($id);
        return view('doctores.editar', compact('doctor'));
    }
    public function storeEdit(Request $request,$id){
        $doctor= Doctores::find($id);
        $doctor->nombres=$request->nombres;
        $doctor->apellidos=$request->apellidos;
        $doctor->especialidad=$request->especialidad;
        $doctor->save();
        return redirect()->route('doctores.index');
    }
    public function destroy($id){
        $doctor=Doctores::find($id);
        $doctor->delete();
        return redirect()->route('doctores.index');
    }
}
