<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\usuarios;
use Session;
class accesoc extends Controller
{
	public function login()
	{
		return view ('sistema.login');
	}
	public function valida(Request $request)
	{
		$user = $request->user;
		$pasw = $request->pasw;
		$this->validate($request,[
			'user'=>'required',
			'pasw'=>'required',
		]);
		$consulta= usuarios::withTrashed()->where('user',$user)->where('pasw','=',$pasw)->get();
		if(count($consulta)==0)
		{
			Session::flash('error', 'El usuario o password no existe');
			return redirect()->route('login');
		}
		else
		{
			if($consulta[0]->deleted_at!="")
			{
				Session::flash('error', 'El usuario esta desactivado, favor de consultar a su administrador');
				return redirect()->route('login');
			}
			else
			{
				Session::put('sesionname',$consulta[0]->nombre);
				Session::put('sesionidu',$consulta[0]->idu);
				Session::put('sesiontipo',$consulta[0]->tipo);

		  /*$sname = Session::get('sesionname');
		  $sidu = Session::get('sesionidu');
		  $stipo = Session::get('sesiontipo');
		  echo $sname . ' '. $sidu . ' '. $stipo;*/
		  return redirect()->route('principal');
		}
	}		


}
public function principal()
{ 
	if(Session::get('sesionidu')!="")
	{
		// if(Session::get('sesiontipo')!="admin"){
		// 	return redirect()->route('contar_abogados');
		// }
		return redirect()->route('contar_abogados');
	}
	else
	{
		Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
		return redirect()->route('login');
	}
}
public function cerrarsesion()
{
	Session::forget('sesionname');
	Session::forget('sesionidu');
	Session::forget('sesiontipo');
	Session::flush();
	Session::flash('error', 'Session Cerrada Correctamente');
	return redirect()->route('login');
}
}
