<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rol;
	
class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol = rol::all();
        return view('admin.page.rolpage',compact('rol'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.rolpage');
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
          'name_rol'=>'required',
        ]);
        rol::create($request->all());
        return redirect('rol')->with('success','rol created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_rol)
    {
        $rol = rol::find($id_rol);
		return view('admin.container.rolFile.show',compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_rol)
    {
        $rol = rol::find($id_rol);
        return view('admin.container.rolFile.edit',compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id_rol)
    {
        $rol= rol::where(['id_rol'=>$id_rol])->get();
               rol::set(['enabled_rol'=>0])->get();

        return redirect('rol')->with('success','rol deleted success');
    }
	
	/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_rol)
    {
        $rol= rol::where(['id_rol'=>$id_rol])->get();
               rol::where(['id_rol'=>$id_rol])->delete();

        return redirect('rol')->with('success','rol deleted success');
    }
}
