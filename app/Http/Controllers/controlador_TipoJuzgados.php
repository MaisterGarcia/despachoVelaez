<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tipo_juzgados;
class controlador_TipoJuzgados extends Controller
{
    public function altaTipJuz(){
    	$clavequesigue = tipo_juzgados::orderBy('id_TipoJuzgado','desc')
    								->take(1)
    								->get();
    	$idTipJuz = $clavequesigue[0]->id_TipoJuzgado+1;

    	return view ('sistema.altaTipoJuzgados')
		     		->with('idTipJuz',$idTipJuz);
    }
    public function guardaTipoJuzgado(Request $request)
	{   
	$id_TipoJuzgado = $request->id_TipoJuzgado;
	$TipoJuzgado = $request->TipoJuzgado;
	//Se mandan los datos a la base de datos
	 $this->validate($request,[
	     'id_TipoJuzgado'=>'required|numeric',
         'TipoJuzgado'=>['required','regex:/^[A-Z][a-z-áéíóúñÑ\s]+[A-Z]{4}-(\s[0-9\s]|[a-zA-Z-áéíóúñÑ\s])+$/']
	     ]);
		 //insert into tipo_abogados (idTipoAbogado,TipoAbogado)-------
	        $TipJuz = new tipo_juzgados;
			$TipJuz->id_TipoJuzgado = $request->id_TipoJuzgado;
			$TipJuz->TipoJuzgado = $request->TipoJuzgado;
			$TipJuz->save();
			$proceso = "Registro de Tipo de Juzgado";
			$mensaje = "Tipo de Juzgado registrado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function reporteTipJuz(){
		$TipJuz = tipo_juzgados::orderBy('id_TipoJuzgado','asc')->get();
		return view('sistema.reporte_TipoJuzgados')
		->with('TipJuz',$TipJuz);
	}
}
