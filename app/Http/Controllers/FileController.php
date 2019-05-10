<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\File;
use App\Sesion;
use DB;

class FileController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showUploadForm()
    {
        // $files = File::OrderBy('id','desc')->get();
        return view('administrador.pagina.usuario.usrFile');
    }
    public function storesFile(Request $request)
    {
        //validat
        $this->validate($request,[
            'file' => 'mimes:txt,pdf,zip,rar,png|max:2560|required'
        ]);
        if($request->hasFile('file')){
            $filename = $request->file->getClientOriginalName();
            $filesize = $request->file->getClientSize();
            $request->file->storeAs('public/upload',$filename);
            $file = new File;
            $file->name = $filename;
            $file->size = $filesize;
            // $file->save();
            if($file->save()){
                return redirect('/file');
            }
               
            
        }
        return $request->all();
    }
    //metod validate for download and listado
    public function index()
    {
        //
        // $files = File::orderBy('id','asc')->get();
        // return view('administrador.pagina.usuario.usrPortafolio',compact('files'));
        $files = DB::table('files')->get();
        return view('administrador.pagina.usuario.usrPortafolio',compact('files'));
    }
    public function destroy($id)
    {
        $file = File::find($id);
        // Storage::delete(config('app.fileDestinationPath').'/'.$file->name);
        // $file->delete();
        // \Storage::delete($file);
        // $file->delete(); //pero no elimina de carpeta storage
        // File::Delete($file);
        // Storage::delete($file);
        // unlink(storage_path('storage/upload/'.$file));
         $file->delete();
        // unlink(storage_path('storage/app/public/upload/'.'/storage/'.$file));
        return back();
        // return back('/portafolio');
    }

    public function download($name)
    {
        $storage_path=storage_path();
        $url = $storage_path.'/storage/'.$name;
        if(Storage::exists($name)){
            return response()->download($url);
        }
        abort(404);

    }
    //v2 download for one file specified
    public function downloadFiles()
    {
        $myFile = public_path("scrum.pdf");
        $headers = ['Content-Type: application/pdf'];
        $newName = 'itsolutionstuff-pdf-file-'.time().'.pdf';
        return response()->download($myFile, $newName, $headers);
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
}
