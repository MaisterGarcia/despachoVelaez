<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tipo_archivos;

class controlador_TipoArchivos extends Controller
{
    public function altaTipArch(){
    	$clavequesigue = tipo_archivos::orderBy('id_TipoArchivo','desc')
    								->take(1)
    								->get();
    	$idTipArch = $clavequesigue[0]->id_TipoArchivo+1;

    	return view ('sistema.altaTipoArchivo')
		     		->with('idTipArch',$idTipArch);
    }
    public function guardaTipoArchivo(Request $request)
	{   
	$idTipoArchivo = $request->idTipoArchivo;
	$NomArchivo = $request->NomArchivo;
	//Se mandan los datos a la base de datos
	 $this->validate($request,[
	     'idTipoArchivo'=>'required|numeric',
         'NomArchivo'=>['regex:/^[A-Z-\s]+([A-Za-z-áéíóúñÑ\s])+$/']
	     ]);
		 //insert into tipo_abogados (idTipoAbogado,TipoAbogado)-------
	        $TipAr = new tipo_archivos;
			$TipAr->id_TipoArchivo = $request->id_TipoArchivo;
			$TipAr->NomArchivo = $request->NomArchivo;
			$TipAr->save();
			$proceso = "Registro de Tipo de Documento";
			$mensaje = "Tipo de Documento registrado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function reporteTipArc(){
		$TipArc = tipo_archivos::orderBy('id_TipoArchivo','asc')->get();
		return view('sistema.reporte_TipoArchivo')
		->with('TipArc',$TipArc);
	}
	public function modificamTArc($id_TipoArchivo){
		//echo "Tipo Abogado a modificar $idTipoAbogado";
		$infom = tipo_archivos::where('id_TipoArchivo','=',$id_TipoArchivo)->get();
		 return view('sistema.modificaTipoArchivo')
		 ->with('infom',$infom[0]);
	}
	public function guardaedicionmTArc(Request $request){
		//echo $request->nombre;
		$NomArchivo = $request->NomArchivo;
		$idTipoArchivo = $request->idTipoArchivo;
		//return "$NomArchivo y $idTipoArchivo";
		$this->validate($request,[
	     'idTipoArchivo'=>'required|numeric',
         'NomArchivo'=>['regex:/^[A-Z-\s]+([A-Za-z-áéíóúñÑ\s])+$/']
	     ]);
			$TArc = tipo_archivos::find($idTipoArchivo);
			$TArc->id_TipoArchivo = $request->idTipoArchivo;
			$TArc->NomArchivo = $request->NomArchivo;
			$TArc->save();
			$proceso = "MODIFICACION DE TIPO DE ARCHIVO";
			$mensaje = "Tipo de Archivo modificado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
}
}
