<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\tareas;
use App\abogados;
use App\estado_tareas;
class controlador_Tareas extends Controller
{
     public function altaTarea(){
    	$clavequesigue = tareas::orderBy('id_Tarea','desc')
    								->take(1)
    								->get();
    	$idTarea = $clavequesigue[0]->id_Tarea+1;

    	$abogados = abogados::orderBy('NomAbogado','asc')->get();

    	$estadoTarea = estado_tareas::orderBy('id_EstTar','asc')->get();


    	return view ('sistema.altaTarea')
		     		->with('idTarea',$idTarea)
		     		->with('abogados',$abogados)
		     		->with('estadoTarea',$estadoTarea);
    }
    public function guardaTarea(Request $request)
	{   
	$id_Tarea = $request->id_Tarea;
	$NomTarea = $request->NomTarea;
	$FechaLimite = $request->FechaLimite;
	$FechaFin = $request->FechaFin;
	$num_folio = $request->num_folio;
	$id_EstTar = $request->id_EstTar;
	//return "$id_Tarea y $num_folio y $id_EstTar";
	//$TipoAbogado = $request->TipoAbogado;
	//Se mandan los datos a la base de datos
	 $this->validate($request,[
	     'id_Tarea'=>'required|numeric',
         'NomTarea'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],
         'FechaLimite'=>['required','regex:/^\d{4}-\d{2}-\d{2}$/'],
         'FechaFin'=>['required','regex:/^\d{4}-\d{2}-\d{2}$/'],
	     ]);
		 //insert into tipo_abogados (idTipoAbogado,TipoAbogado)-------
	        $Tar = new tareas;
			$Tar->id_Tarea = $request->id_Tarea;
			$Tar->NomTarea = $request->NomTarea;
			$Tar->FechaLimite = $request->FechaLimite;
			$Tar->FechaFin = $request->FechaFin;
			$Tar->num_folio = $request->num_folio;
			$Tar->id_EstTar = $request->id_EstTar;
			$Tar->save();
			$proceso = "Tarea a Realizar Regitsrada";
			$mensaje = "Tarea registrada correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function reporteTarea(){
		$Tareas = DB::table('tareas')
		->join('abogados','tareas.num_folio','=','abogados.num_folio')
		->join('estado_tareas','tareas.id_EstTar','=','estado_tareas.id_EstTar')
		->select('tareas.*','abogados.NomAbogado','estado_tareas.EstadoTarea')
		->orderBy('id_Tarea','asc')
		->get();


		return view('sistema.reporte_Tarea')
		->with('Tareas',$Tareas);
	}
	public function modificamTarea($id_Tarea){
		$infom = tareas::where('id_Tarea','=',$id_Tarea)->get();
		$idTarea = $infom[0]->id_Tarea;
		$abogados = abogados::where('num_folio','=',$num_folio)->get();
		$todosdemas = abogados::where('num_folio','!=',$num_folio)->get();
		$estado_tareas = estado_tareas::where('id_EstTar','=',$id_EstTar)->get();
		$todosdemas = estado_tareas::where('id_EstTar','!=',$id_EstTar)->get();
		return view('sistema.modificaTarea')
		->with('infom',$infom[0])
		->with('idTarea',$idTarea)
		->with('abogados',$abogados[0]->NomAbogado.' '.$abogados[0]->AppAbogado.' '.$abogados[0]->ApmAbogados)
		->with('todosdemas',$todosdemas)
		->with('estado_tareas',$estado_tareas[0]->EstadoTarea)
		->with('todasdemas',$todasdemas);
	}
		public function guardaedicionmTarea(Request $request){
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
