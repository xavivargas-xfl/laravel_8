<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Juez;
use Illuminate\Support\Facade\file;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JuezController extends Controller
{
    public function index()
    {
        $juez = Juez::all();
        return $juez;
    }
    public function store(Request $request){
        //dd($request);
        $juez = new Juez;
        $juez->ci = $request->input('ci');
        $juez->nombre = $request->input('nombre');
        $juez->apellido = $request->input('apellido');
        $juez->sexo = $request->input('sexo');
        $juez->nacionalidad = $request->input('nacionalidad');
        $juez->fechaNac = $request->input('fechaNac');
        $juez->foto = $request->input('foto');
        /*
         //---------Guardar Imagen -------
        $sol_filename=(string)Str::uuid();
        if($request->hasFile("foto")){
            $file=$request->file("foto");
            $name_sol = $sol_filename.".".$file->guessExtension();
                        //$ruta = public_path("pdf/".$name_sol);
            if($file->guessExtension()=="png" || "jpg"){
                $request->file('foto')->storeAs('/public/imagenes/' , $name_sol);
                $jugador->foto =  $name_sol;
                //copy($file, $ruta);

            }else{
                dd("NO ES UN PNG");
            }
        }*/


        $juez->save();

        return response()->json([
            'status' => 200,
            'message'=> 'se aniadido estudiante exitosamente',
        ]);
    }
    public function show()
    {
        $juez = Juez::All();
        return $juez;
    }

    public function update(Request $request, $id)
    {
        $juez = Juez::find($id);
        $juez->update($request->all());
        return $juez;
    }

    public function destroy($id)
    {
        $juez = Juez::destroy($id);
        return $juez;
    }



}
