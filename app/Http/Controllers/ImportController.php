<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
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
        return view('users.pagina.import');
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
                            'id'=>$value-> id,
                            'name' =>$value-> name,
                            'lastU' => $value-> lastu,
                            'email' =>$value-> email,
                            'password' => $value-> password,
                            'ci' => $value-> ci,
                            'estado' => $value-> estado,
                        ];
                        $inserte[] = [
                            'materia_id' =>$value-> materia_id,
                            'user_id' => $value-> user_id,
                        ];
                        $insertee[] = [
                            'role_id' =>$value-> role_id,
                            'user_id' => $value-> user_id,
                        ];
                    }
                    if(!empty($insert)){
                        $insertData = DB::table('users')->insert($insert);
                        $insertDatae = DB::table('materia_user')->insert($inserte);
                        $insertDatae = DB::table('role_user')->insert($insertee);
                        
                        if($insertData){
                            Session::flash('succes','se import satisfactoriamene');
                        }else{
                            Session::flash('error','Error en insercion de datos');
                            return redirect('users');
                        }

                    }
                }
                return redirect('users');
            }else{
                Session:: flash('error','File is a' .$extension. 'file.!! Please upload a valid xls/csv file ..!!') ;
                return redirect('users');
            
            }
        }
    }
}
