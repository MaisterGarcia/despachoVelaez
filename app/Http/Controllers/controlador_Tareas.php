<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;
use App\tareas;
use App\abogados;
use App\estado_tareas;
class controlador_Tareas extends Controller
{
	public function altaTarea(){
		if(Session::get('sesionidu')!="")
		{
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
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function guardaTarea(Request $request)
	{   
		if(Session::get('sesionidu')!="")
		{
		$id_Tarea = $request->id_Tarea;
		$NomTarea = $request->NomTarea;
		$FechaLimite = $request->FechaLimite;
		$FechaFin = $request->FechaFin;
		$num_folio = $request->num_folio;
		$id_EstTar = $request->id_EstTar;

		$this->validate($request,[
			'id_Tarea'=>'required|numeric',
			'NomTarea'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],
			'FechaLimite'=>['required'],
			'FechaFin'=>['required'],
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
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function reporteTarea(){
		if(Session::get('sesionidu')!="")
		{
		$Tareas = DB::table('tareas')
		->join('abogados','tareas.num_folio','=','abogados.num_folio')
		->join('estado_tareas','tareas.id_EstTar','=','estado_tareas.id_EstTar')
		->select('tareas.*','abogados.NomAbogado','estado_tareas.EstadoTarea')
		->orderBy('id_Tarea','asc')
		->get();
	//	return $Tareas;
		return view('sistema.reporte_Tarea')
		->with('Tareas',$Tareas);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function modificamTarea($id_Tarea){
		if(Session::get('sesionidu')!="")
		{
		$infom = tareas::where('id_Tarea','=',$id_Tarea)->get();
		$id_EstTar = $infom[0]->id_EstTar;
		$num_folio=$infom[0]->num_folio;

		$abogados = abogados::where('num_folio','=',$num_folio)->get();
		$todosdemas = abogados::where('num_folio','!=',$num_folio)->get();

		$estado_tareas = estado_tareas::where('id_EstTar','=',$id_EstTar)->get();
		$todasdemas = estado_tareas::where('id_EstTar','!=',$id_EstTar)->get();
		return view('sistema.modificaTarea')
		->with('infom',$infom[0])
		->with('id_EstTar',$id_EstTar)
		->with('estado_tareas',$estado_tareas[0]->EstadoTarea)
		->with('todasdemas',$todasdemas)
		->with('num_folio',$num_folio)
		->with('abogados',$abogados[0])
		->with('todosdemas',$todosdemas);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function guardaedicionmTarea(Request $request){
		if(Session::get('sesionidu')!="")
		{

		$id_Tarea = $request->id_Tarea;
		$NomTarea = $request->NomTarea;
		$FechaLimite = $request->FechaLimite;
		$FechaFin = $request->FechaFin;
		$num_folio = $request->num_folio;
		$id_EstTar = $request->id_EstTar;

		$this->validate($request,[
			'id_Tarea'=>'required|numeric',
			'NomTarea'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],
			'FechaLimite'=>['required'],
			'FechaFin'=>['required'],
		]);
		$Tar = tareas::find($id_Tarea);
		$Tar->id_Tarea = $request->id_Tarea;
		$Tar->NomTarea = $request->NomTarea;
		$Tar->FechaLimite = $request->FechaLimite;
		$Tar->FechaFin = $request->FechaFin;
		$Tar->num_folio = $request->num_folio;
		$Tar->id_EstTar = $request->id_EstTar;
		$Tar->save();
		$proceso = "Tarea a Realizar Modificada";
		$mensaje = "Tarea Modificada correctamente";
		return view ("sistema.mensaje")
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function eliminatarea($id_Tarea){
		if(Session::get('sesionidu')!="")
		{
		tareas::find($id_Tarea)->delete();
		$proceso = "Eliminar Tarea";
		$mensaje = "La Tarea ha sido borrada correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function restarurartarea($id_Tarea){
		if(Session::get('sesionidu')!="")
		{
		tareas::withTrashed()->where('id_Tarea',$id_Tarea)->restore();
		$proceso = "Restaurar Tarea";
		$mensaje = "La Tarea ha sido restaurada correctamente";
		return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
}
