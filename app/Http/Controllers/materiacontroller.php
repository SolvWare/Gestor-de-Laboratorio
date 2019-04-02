<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materia;
class materiacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {    
        //dd($request);
       //$materias =  materia::all();
        // return $materias;
        return view('admin/page/registmatpage');//->with('materias',$materias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   /*
        $this->validate($request,[
            'codigoM' => 'required|max:3',
            'nombreM' => 'required|max:50'
        ]);
       */
      /*
             materia::create([
            'codigoM' => $request->get('codigoM'),
            'nombreM' => $request->get('nombreM'),
            'grupoM' => $request->get('grupoM'),
            
        ]);

        return redirect()->back();
        //return Redirect::to('materia')->with('notice', 'El usuario ha sido creado correctamente.');
        */
        
        $materia = new materia();
        $materia->codigoM = $request->input('codigoM');
        $materia->nombreM = $request->input('nombreM');
        $materia->grupoM = $request->input('grupoM');
        $materia->save();
        return view('admin/page/registmatpage')->with('materia',$materia);
    }
    public function getmateria(Request $request, $id )
    {
        $materia = materia::find($id);
        return $materia;
        
    }
     public function listarmateria()
     {
        $materias =  materia::all();
        // return $materias;
        return view('admin/page/ledmatpage')->with('materias',$materias);
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $materias = materia::find($id);
            return View('admin/page/registmatpage')->with('materias', $materias);
         
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
