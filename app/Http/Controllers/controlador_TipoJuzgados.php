<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;
use App\tipo_juzgados;
class controlador_TipoJuzgados extends Controller
{
	public function altaTipJuz(){
		if(Session::get('sesionidu')!="")
		{
		$clavequesigue = DB::table('tipo_juzgados')->orderBy('id_TipoJuzgado','desc')
		->take(1)
		->get();
		$idTipJuz = $clavequesigue[0]->id_TipoJuzgado+1;

		return view ('sistema.altaTipoJuzgados')
		->with('idTipJuz',$idTipJuz);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function guardaTipoJuzgado(Request $request){
		if(Session::get('sesionidu')!="")
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
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function reporteTipJuz(){
		if(Session::get('sesionidu')!="")
		{
		$TipJuz = tipo_juzgados::withTrashed()->orderBy('id_TipoJuzgado','asc')->get();
		return view('sistema.reporte_TipoJuzgados')
		->with('TipJuz',$TipJuz);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function eliminatipojuzgado($id_TipoJuzgado){
		if(Session::get('sesionidu')!="")
		{
		tipo_juzgados::find($id_TipoJuzgado)->delete();
		$proceso = "Eliminar Tipo Juzgado";
		$mensaje = "El Tipo Juzgado ha sido borrado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function restarurartipojuzgado($id_TipoJuzgado){
		if(Session::get('sesionidu')!="")
		{
		tipo_juzgados::withTrashed()->where('id_TipoJuzgado',$id_TipoJuzgado)->restore();
		$proceso = "Restaurar Tipo Juzgado";
		$mensaje = "El Tipo Juzgado ha sido restaurado correctamente";
		return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}


	public function modificatipojuzgado($id_TipoJuzgado){
		if(Session::get('sesionidu')!="")
		{
		$tipo_juzgados= tipo_juzgados::where('id_TipoJuzgado','=',$id_TipoJuzgado)->get();

		return view('sistema.modificatipojuzgado')
		->with('tipo_juzgados',$tipo_juzgados[0]);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function guardaediciontipojuzgado(Request $request){
		if(Session::get('sesionidu')!="")
		{
		$id_TipoJuzgado = $request->id_TipoJuzgado;
		$TipoJuzgado = $request->TipoJuzgado;
		

		$this->validate($request,[
			'id_TipoJuzgado'=>'required|numeric',
			'TipoJuzgado'=>['required','regex:/^[A-Z][a-z-áéíóúñÑ\s]+[A-Z]{4}-(\s[0-9\s]|[a-zA-Z-áéíóúñÑ\s])+$/']
		]);
		$juz = tipo_juzgados::find($id_TipoJuzgado);
		$juz->id_TipoJuzgado = $request->id_TipoJuzgado;
		$juz->TipoJuzgado = $request->TipoJuzgado;
		$juz->save();
		$proceso = "Modifica Tipo Juzgado";
		$mensaje = "Tipo Juzgado actualizado correctamente";
		return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
		
	}

}
