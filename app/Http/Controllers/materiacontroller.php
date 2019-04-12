<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['materiass']=Materia::orderBy('id', 'DESC')->paginate(3);
        return view('admin.page.ledmatpage',$datos );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    

        return view('admin.page.registmatpage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request,[
            'codigoM' => 'required||max:3',
            'nombreM' => 'required|max:50',
            'grupoM' => 'required',
        ],
        [
            'codigoM.max' => 'maximo 3 caracteres para el codigo'
        ]
    );
        
        $materia = new Materia();
        $materia->codigoM = $request->input('codigoM');
        $materia->nombreM = $request->input('nombreM');
        $materia->grupoM = $request->input('grupoM');
        $materia->save();
        
        
       return Redirect()->back()->with('mensaje','¡Genial! materia agregado con éxito');
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
        //$materia= materia::findOrFail($id);

        //return view('admin.container.edit', compact('materia'));
     
        $where = array('id' => $id);
        $data['mate_info'] = Materia::where($where)->first();
 
        return view('admin.container.editmat', $data);
        
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
        //$datosmateria = $request->all();
       // materia::where('id','=',$id)->update($datosmateria);

        $this->validate($request,[
            'codigoM' => 'required||max:3',
            'nombreM' => 'required|max:50',
            'grupoM' => 'required',
        ]
        );
         
        $update = ['codigoM' => $request->codigoM, 'nombreM' => $request->nombreM,'grupoM' => $request->grupoM];
        Materia::where('id',$id)->update($update);
   

        return Redirect('materia')
       ->with('success','Genial! materia actualizada exitosamente');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Materia::destroy($id);

        return redirect('materia');
    }
}
