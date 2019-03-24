<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\tipo_abogados;

class controlador_abogados extends Controller
{
	public function altaTipAb(){
		if(Session::get('sesionidu')!="")
		{
			$clavequesigue = DB::table('tipo_abogados')->orderBy('IdTipoAbogado', 'desc')->take(1)->get();
		$idTipAbs = $clavequesigue[0]->IdTipoAbogado+1;

		return view ('sistema.altaTipoAbogado')
		->with('idTipAbs',$idTipAbs);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function guardaTipoAbogado(Request $request)
	{   
		if(Session::get('sesionidu')!="")
		{
		$IdTipoAbogado = $request->IdTipoAbogado;
		$TipoAbogado = $request->TipoAbogado;
	//Se mandan los datos a la base de datos
		$this->validate($request,[
			'IdTipoAbogado'=>'required|numeric',
			'TipoAbogado'=>['regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/']
		]);
		 //insert into tipo_abogados (IdTipoAbogado,TipoAbogado)-------
		$TipAb = new tipo_abogados;
		$TipAb->IdTipoAbogado = $request->IdTipoAbogado;
		$TipAb->TipoAbogado = $request->TipoAbogado;
		$TipAb->save();
		$proceso = "Registro de Tipo de Abogado";
		$mensaje = "Tipo de Abogado registrado correctamente";
		return view ("sistema.mensaje")
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function reporteTipAb(){
		if(Session::get('sesionidu')!="")
		{
		$TipAb = tipo_abogados::withTrashed()->orderBy('IdTipoAbogado','asc')->get();
		return view('sistema.reporte_TipoAbogados')
		->with('TipAb',$TipAb);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function eliminatipoabogado($IdTipoAbogado){
		if(Session::get('sesionidu')!="")
		{
		tipo_abogados::find($IdTipoAbogado)->delete();
		$proceso = "Eliminar Abogado";
		$mensaje = "El Abogado ha sido borrado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function restarurarTipoA($idTipoAbogado){
		if(Session::get('sesionidu')!="")
		{
			tipo_abogados::withTrashed()->where('IdTipoAbogado',$idTipoAbogado)->restore();
		$proceso = "Restaurar Tipo Abogado";
		$mensaje = "El Tipo de Abogado ha sido restaurado correctamente";
		return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function modificamTA($IdTipoAbogado){
		if(Session::get('sesionidu')!="")
		{
		$infom = tipo_abogados::where('IdTipoAbogado','=',$IdTipoAbogado)->get();
		return view('sistema.modificaTipoAbogado')
		->with('infom',$infom[0]);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function guardaedicionmTA(Request $request){
		if(Session::get('sesionidu')!="")
		{
		$TipoAbogado = $request->TipoAbogado;
		$IdTipoAbogado = $request->IdTipoAbogado;
		$this->validate($request,[
			'IdTipoAbogado'=>'required|numeric',
			'TipoAbogado'=>['regex:/^[A-Z\s]+([a-zA-Z-áéíóúñÑ\s])+$/']
		]);
		$TA = tipo_abogados::find($IdTipoAbogado);
		$TA->IdTipoAbogado = $request->IdTipoAbogado;
		$TA->TipoAbogado = $request->TipoAbogado;
		$TA->save();
		$proceso = "MODIFICACION DE TIPO DE ABOGADO";
		$mensaje = "Tipo de Abogado modificado correctamente";
		return view ("sistema.mensaje")
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
}
