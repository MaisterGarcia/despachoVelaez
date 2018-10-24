<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tipo_juicios;
class controlador_TipoJuicio extends Controller
{
     public function altaTipJui(){
    	$clavequesigue = tipo_juicios::orderBy('id_TipoJuicio','desc')
    								->take(1)
    								->get();
    	$idTipJuic = $clavequesigue[0]->id_TipoJuicio+1;
    	//return "$idTipJuic";
    	return view ('sistema.altaTipoJuicio')
		     		->with('idTipJuic',$idTipJuic);
    }
    public function guardaTipoJuicio(Request $request)
	{   
	$id_TipoJuicio = $request->id_TipoJuicio;
	$NomTipoJuicio = $request->NomTipoJuicio;
	//Se mandan los datos a la base de datos
	 $this->validate($request,[
	     'id_TipoJuicio'=>'required|numeric',
         'NomTipoJuicio'=>['regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/']
	     ]);
		 //insert into tipo_abogados (idTipoAbogado,TipoAbogado)-------
	        $TipJui = new tipo_juicios;
			$TipJui->id_TipoJuicio = $request->id_TipoJuicio;
			$TipJui->NomTipoJuicio = $request->NomTipoJuicio;
			$TipJui->save();
			$proceso = "Registro de Tipo de Juicio";
			$mensaje = "Tipo de Juicio registrado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function reporteTipJuic(){
		$TipJui = tipo_juicios::orderBy('id_TipoJuicio','asc')->get();
		return view('sistema.reporte_TipoJuicios')
		->with('TipJui',$TipJui);
	}
}
