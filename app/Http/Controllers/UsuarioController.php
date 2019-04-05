<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $usuarios = usuario::all();
        return view('admin.page.registpage',compact('usuarios'));
    }
    public function search(){
        $usuarios =DB::table('usuarios')->paginate(10);
        return view('admin.page.searchpage')->with(compact('usuarios'));
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
        $usuario = new usuario;
        $usuario->codSis = $request->input('codSis');
        $usuario->ciUsr = $request->input('ciUsr');
        $usuario->nameUsr = $request->input('nameUsr');
        $usuario->lastUsr = $request->input('lastUsr');
        $usuario->rol = $request->input('rol');
        $usuario->save();
        return redirect('/usuario');

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
