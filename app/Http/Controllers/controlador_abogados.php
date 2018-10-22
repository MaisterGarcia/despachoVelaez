<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tipo_abogados;

class controlador_abogados extends Controller
{
     public function altaTipAb(){
    	$clavequesigue = tipo_abogados::orderBy('idTipoAbogado','desc')
    								->take(1)
    								->get();
    	$idTipAbs = $clavequesigue[0]->idTipoAbogado+1;

    	return view ('sistema.altaTipoAbogado')
		     		->with('idTipAbs',$idTipAbs);
    }
    public function guardaTipoAbogado(Request $request)
	{   
	$idTipoAbogado = $request->idTipoAbogado;
	$TipoAbogado = $request->TipoAbogado;
	//Se mandan los datos a la base de datos
	 $this->validate($request,[
	     'idTipoAbogado'=>'required|numeric',
         'TipoAbogado'=>['regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/']
	     ]);
		 //insert into tipo_abogados (idTipoAbogado,TipoAbogado)-------
	        $TipAb = new tipo_abogados;
			$TipAb->idTipoAbogado = $request->idTipoAbogado;
			$TipAb->TipoAbogado = $request->TipoAbogado;
			$TipAb->save();
			$proceso = "Registro de Tipo de Abogado";
			$mensaje = "Tipo de Abogado registrado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function reporteTipAb(){
		$TipAb = tipo_abogados::orderBy('idTipoAbogado','asc')->get();
		return view('sistema.reporte_TipoAbogados')
		->with('TipAb',$TipAb);
	}
	public function modificamTA($idTipoAbogado){
		//echo "Tipo Abogado a modificar $idTipoAbogado";
		$infom = tipo_abogados::where('idTipoAbogado','=',$idTipoAbogado)->get();
		 return view('sistema.modificaTipoAbogado')
		 ->with('infom',$infom[0]);
	}
		public function guardaedicionmTA(Request $request){
		//echo $request->nombre;
		$TipoAbogado = $request->TipoAbogado;
		$idTipoAbogado = $request->idTipoAbogado;

		$this->validate($request,[
	     'idTipoAbogado'=>'required|numeric',
         'TipoAbogado'=>['regex:/^[A-Z\s]+([a-zA-Z-áéíóúñÑ\s])+$/']
	     ]);
			$TA = tipo_abogados::find($idTipoAbogado);
			$TA->idTipoAbogado = $request->idTipoAbogado;
			$TA->TipoAbogado = $request->TipoAbogado;
			$TA->save();
			$proceso = "MODIFICACION DE TIPO DE ABOGADO";
			$mensaje = "Tipo de Abogado modificado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
}
}
