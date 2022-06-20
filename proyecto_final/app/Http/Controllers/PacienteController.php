<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auxiliar.gestion_pacientes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Auxiliar.crear_paciente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente();
        //variable instanciada de la clase Paciente
        //-> campos de la base de datos = -> name del formulario
        $existe = DB::table('pacientes')->where('documento', $request->iden)->first();
        if (is_null($existe)) {
            $paciente->documento = $request->iden;
            $paciente->tipoDoc = $request->tipoDoc;
            $paciente->nombre = $request->name;
            $paciente->entidad = $request->entidad;
            $paciente->sexo = $request->sexo;
            $paciente->edad = $request->edad;
            $paciente->regimen = $request->reg;
            $paciente->tipoAfiliacion = $request->tipoAf;
            $paciente->cama = $request->cama;
            $paciente->fechaIngreso = $request->fecha;
            $paciente->auxiliarId = Auth::user()->id;
            $paciente->save();

            return redirect()->route('paciente.index')->with('success', 'Paciente guardado');
        } else {
            return redirect()->route('paciente.index')->with('error', 'El número de documento ya existe');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
