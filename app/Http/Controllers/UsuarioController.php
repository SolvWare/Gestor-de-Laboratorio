<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use DB;

class UsuarioController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $usuarios =DB::table('usuarios')->orderBy('id', 'DESC')->paginate(4);
        return view('admin.page.searchpage')->with(compact('usuarios'));

       // $datos['usuarios']=Usuario::orderBy('id', 'DESC')->paginate(3);
       // return view('admin.page.searchpage',$datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = usuario::all();
        return view('admin.page.registpage',compact('usuarios'));
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
        $this->validate($request,[
            'codSis' => 'required',
            'ciUsr' => 'required',
            'nameUsr' => 'required',
            'lastUsr' => 'required',
            'rol' => 'required',
            'materia' => 'required',
            'grupo' => 'required',
            
        ]
        
    );

        $usuario = new Usuario;
        $usuario->codSis = $request->input('codSis');
        $usuario->ciUsr = $request->input('ciUsr');
        $usuario->nameUsr = $request->input('nameUsr');
        $usuario->lastUsr = $request->input('lastUsr');
        $usuario->rol = $request->input('rol');
        $usuario->materia = $request->input('materia');
        $usuario->grupo = $request->input('grupo');
        $usuario->save();
        //return back();
        return Redirect()->back()->with('mensaje','usuario registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = usuario::where('id', $id)->firstOrFail();
        return response()->json([
            'usuario' => $usuario,
        ]);
        // $usuarios = usuario::findOrFail($id);
        // return view('admin.page.searchpage',compact('usuarios'));
        
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
        $this->validate($request, [
            'codSis' => 'required|integer',
            'ciUsr' => 'required|integer',
            'nameUsr' => 'required|string',
            'lastUsr' => 'required|string',
            'rol' => 'required|string',
        ]);
        usuario::where('id', $id)->update(
            array(
                'codSis' => $request->codSis,
                'ciUsr' => $request->ciUsr,
                'nameUsr' => $request->nameUsr,
                'lastUsr' => $request->lastUsr,
                'rol' => $request->rol,
            )
        );
        return response()->json([
            'message' => 'Se modifico correctamente!',
        ]);
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
        $usuario =usuario::findOrFail($id);
        $usuario->delete();
        return response()->json($usuario);
    }
}
