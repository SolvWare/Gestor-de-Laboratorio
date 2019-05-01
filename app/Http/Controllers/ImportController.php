<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\usuario;
use Session;
use Excel;
use File;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('administrador.pagina.usuario.usrImportar');
    }
    public function import(Request $request)
    {
        //validacion
        $this->validate($request,array(
            'file' => 'required'
        ));

        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if($extension == "xlsx" || $extension == "xls" || $extension == "csv"){

                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader){
                })->get();
                if(!empty($data) && $data->count()){
                    foreach ($data as $key => $value){
                        $insert[] = [
                            'codSis' =>$value-> codsis,
                            'ciU' => $value-> ciu,
                            'nameU' =>$value-> nameu,
                            'lastU' => $value-> lastu,
                            'rol' => $value-> rol,
                            'materia' => $value-> materia,
                            'grupo' => $value-> grupo,
                        ];
                    }
                    if(!empty($insert)){
                        $insertData = DB::table('usuarios')->insert($insert);
                        
                        if($insertData){
                            Session::flash('succes','se import satisfactoriamene');
                        }else{
                            Session::flash('error','Error en insercion de datos');
                            return redirect('usuario');
                        }

                    }
                }
                return redirect('usuario');
            }else{
                Session:: flash('error','File is a' .$extension. 'file.!! Please upload a valid xls/csv file ..!!') ;
                return redirect('usuario');
            
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
