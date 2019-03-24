<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\submaterias;
use App\juicio;

class submateriasController extends Controller
{
	// Metodo para crear retorna vista formulario
    public function altaSubmateria(){
        $clavequesigue = submaterias::orderBy('id_Submateria','desc')
                                    ->take(1)
                                    ->get();
        $idSubm = $clavequesigue[0]->id_Submateria+1;

        $juicios = juicio::orderBy('num_juicio','asc')->get();

    	return view("sistema.altasubmaterias")
                    ->with('idSubm',$idSubm)
                    ->with('juicios',$juicios);
    }

    public function guardaSub(Request $request){
    $id_Submateria = $request->id_Submateria;
    $NomSubmateria = $request->NomSubmateria;
    $num_folio = $request->num_folio;
    //return "$id_Tarea y $num_folio y $id_EstTar";
    //$TipoAbogado = $request->TipoAbogado;
    //Se mandan los datos a la base de datos
     $this->validate($request,[
         'id_Submateria'=>'required|numeric',
         'NomSubmateria'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],
         ]);
         //insert into tipo_abogados (idTipoAbogado,TipoAbogado)-------
            $Sub = new submaterias;
            $Sub->id_Submateria = $request->id_Submateria;
            $Sub->NomSubmateria = $request->NomSubmateria;
            $Sub->num_juicio = $request->num_juicio;
            $Sub->save();
            $proceso = "Submateria a Realizar Regitsrada";
            $mensaje = "Submateria registrada correctamente";
            return view ("sistema.mensaje")
            ->with('proceso',$proceso)
            ->with('mensaje',$mensaje);
    }
    public function reporteSub(){
        $Sub = DB::table('submaterias')
        ->join('juicios','submaterias.num_juicio','=','juicios.num_juicio')
        ->select('submaterias.*','juicios.NomDemandante')
        ->orderBy('id_Submateria','asc')
        ->get();
        return view('sistema.reporteSubmateria')
        ->with('Sub',$Sub);
    }
}
