<?php

namespace App\Http\Controllers;
use App\Horario;
use App\Materia;
use App\Laboratorio;
use App\Usuario;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Inscripcion;

class InscripcionController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $laboratorios = Laboratorio::all();
        $materias = Materia::all();
        $horarios = Horario::all();
        $usuarios = Usuario::all();
        $inscripcions = Inscripcion::all();
        return view('estudiante.pagina.inscripcionE.inscripcionActual', compact('laboratorios','materias','horarios','usuarios','inscripcions'));
    }
    public function usu()
    { 
         $materias = Materia::all();
        $usuarios = Usuario::orderBy('id', 'DESC')->get();
        $rols = Rol::all();
        return view('administrador.pagina.estudiante.usrEstudiante', compact('usuarios','materias','rols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laboratorios = Laboratorio::all();
        $materias = Materia::all();
        $horarios = Horario::all();
        $usuarios = Usuario::all();
        return view('estudiante.pagina.inscripcionE.formEstudiante', compact('laboratorios','materias','horarios','usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        //dd(request()->dia);
        // $labo = Laboratorio::findOrFail(1);
        // $labo->horarios();
        // if($labo){
        $inscripcion = new Inscripcion();
        $inscripcion->usuario_id = request()->usuario_id;
        $inscripcion->materia = request()->materia;
        $inscripcion->laboratorio = request()->laboratorio;
        $inscripcion->dia = request()->dia;
        $inscripcion->hora = request()->hora;
        $inscripcion->save();
    //    //}
           // Horario::create()
        return redirect('inscripcion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $horario = Horario::findOrFail(1);    
        $nombre=$horario->laboratorio->nameL;

        $horario = Horario::findOrFail(1);
        $nombre=$horario->materia->nameM;    

        $horario = Horario::findOrFail($id);
        $nombr=$horario->dia;   

       // return $nombr;
        return view('estudiante.pagina.inscripcionE.inscripcionEdit', compact('nombr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {     $laboratorio = Laboratorio::find($id);

         $horario = Horario::find($id);
         return view('estudiante.pagina.inscripcionE.inscripcionEdit', compact('horario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        $horario = new Horario();
        $horario->materia_id = request()->materia_id;
        $horario->laboratorio_id = request()->laboratorio_id;
        $horario->dia = request()->dia;
        $horario->hora = request()->hora;
        $horario->save();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
