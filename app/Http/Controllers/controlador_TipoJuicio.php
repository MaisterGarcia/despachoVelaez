<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\tipo_juicios;
class controlador_TipoJuicio extends Controller
{
	public function altaTipJui(){
		if(Session::get('sesionidu')!="")
		{
			$clavequesigue = tipo_juicios::orderBy('id_TipoJuicio','desc')
			->take(1)
			->get();
			$idTipJuic = $clavequesigue[0]->id_TipoJuicio+1;
    	//return "$idTipJuic";
			return view ('sistema.altaTipoJuicio')
			->with('idTipJuic',$idTipJuic);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function guardaTipoJuicio(Request $request)
	{   
		if(Session::get('sesionidu')!="")
		{
			$id_TipoJuicio = $request->id_TipoJuicio;
			$NomTipoJuicio = $request->NomTipoJuicio;
	//Se mandan los datos a la base de datos
			$this->validate($request,[
				'id_TipoJuicio'=>'required|numeric',
				'NomTipoJuicio'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/']
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
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function reporteTipJuic(){
		if(Session::get('sesionidu')!="")
		{
			$TipJui = tipo_juicios::withTrashed()->orderBy('id_TipoJuicio','asc')->get();
			return view('sistema.reporte_TipoJuicios')
			->with('TipJui',$TipJui);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function eliminaTipJui($id_TipoJuicio){
		if(Session::get('sesionidu')!="")
		{
			tipo_juicios::find($id_TipoJuicio)->delete();
			$proceso = "Eliminar Tipo de Juicio";
			$mensaje = "El Tipo de Juicio ha sido borrado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function restaurarTipJui($id_TipoJuicio){
		if(Session::get('sesionidu')!="")
		{
			tipo_juicios::withTrashed()->where('id_TipoJuicio',$id_TipoJuicio)->restore();
			$proceso = "Restaurar Tipo de Juicio";
			$mensaje = "El Tipo de Juicio ha sido restaurado correctamente";
			return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function modificaTipJui($id_TipoJuicio){
		if(Session::get('sesionidu')!="")
		{
			$tipo_juicios= tipo_juicios::where('id_TipoJuicio','=',$id_TipoJuicio)->get();
			return view ('sistema.modificaTipoJuicio')
			->with('tipo_juicios',$tipo_juicios[0]);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function guardaedicionTipJui(Request $request){
		if(Session::get('sesionidu')!="")
		{
			$id_TipoJuicio = $request->id_TipoJuicio;
			$NomTipoJuicio = $request->NomTipoJuicio;
	//Se mandan los datos a la base de datos
			$this->validate($request,[
				'id_TipoJuicio'=>'required|numeric',
				'NomTipoJuicio'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/']
			]);
			$TipJui = tipo_juicios::find($id_TipoJuicio);
			$TipJui->id_TipoJuicio = $request->id_TipoJuicio;
			$TipJui->NomTipoJuicio = $request->NomTipoJuicio;
			$TipJui->save();
			$proceso = "Modifica de Tipo de Juicio";
			$mensaje = "Tipo de Juicio corregido correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje); }
			else
			{
				Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
				return redirect()->route('login');
			}
		}
	}
