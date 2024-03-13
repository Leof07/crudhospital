<?php

namespace App\Http\Controllers;

use App\Models\Doctores;
use App\Models\Pacientes;
use Illuminate\Http\Request;

class Paciente extends Controller
{
    //
    public function index(){
        $pacientes= Pacientes::getList();
        return view('pacientes.index', compact('pacientes'));
    }
    public function create(){
        $doctores=Doctores::getList();
        return view('pacientes.crear', compact('doctores'));
    }
    public function store(Request $request){
        $paciente= new Pacientes();
        $paciente->nombres=$request->nombres;
        $paciente->apellidos=$request->apellidos;
        $paciente->direccion=$request->direccion;
        $paciente->edad=$request->edad;
        $paciente->doctores_id=$request->doctor_id;
        $paciente->save();
        return redirect()->route('pacientes.index');
    }
}
