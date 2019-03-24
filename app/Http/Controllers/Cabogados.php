<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;
use App\abogados;
use App\estados;
use App\clientes;
use App\juzgados;
use App\juicio;
use App\municipios;
use App\tipo_abogados;
use App\tipo_archivos;
use App\tipo_juzgados;
use App\archivos;
use App\tipo_juicios;

class Cabogados extends Controller
{
	///Abogados///
	public function altaabogado(){
		if(Session::get('sesionidu')!="")
		{
			$estados = estados::orderBy('NomEstado','asc')->get();
			$municipios = municipios::orderBy('NomMunicipio','asc')->get();
			$tipoAb = DB::table('tipo_abogados')->orderBy('IdTipoAbogado', 'asc')->get();
			return view ('sistema.altaabogado')
			->with('estados',$estados)
			->with('municipios',$municipios)
			->with('tipoAb',$tipoAb);
		}
		else
		{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function guardaabogado(Request $request){
		if(Session::get('sesionidu')!="")
		{
			$num_folio = $request->num_folio;
			$NomAbogado = $request->NomAbogado;
			$AppAbogado = $request->AppAbogado;
			$ApmAbogado = $request->ApmAbogado;
			$edad = $request->edad;
			$sexo = $request->sexo;
			$email = $request->email;
			$telefono = $request->telefono;
			$EstadoCivil = $request->EstadoCivil;
			$id_est = $request->id_est;
			$id_mun = $request->id_mun;
			$IdTipoAbogado = $request->IdTipoAbogado;

		//no se recibe el archivo

			$this->validate($request,[
				'num_folio'=>'required|alpha_num',
				'NomAbogado'=>['required','regex:/^[\pL\s\-]+$/u'],
				'AppAbogado'=>['required','regex:/^[\pL\s\-]+$/u'],
				'ApmAbogado'=>['required','regex:/^[\pL\s\-]+$/u'],
				'edad'=>'required|integer|min:18|max:80',
				'email'=>'required|email',
				'telefono'=>['required','regex:/^[0-9]{10}$/'],
				'EstadoCivil'=>'required|alpha',
				'archivo' => 'image|mimes:jpg,jpeg,gif,png'
			]);
			$file = $request->file('archivo');
			if($file!=""){
		 	//ldate => 20180928_063455_
				$ldate = date('Ymd_His_');
			 //$img = normita.jpg
				$img = $file->getClientOriginalName();
			 //img2 = 20180928_063455_normita.jpg
				$img2 = $ldate.$img;

				\Storage::disk('local')->put($img2, \File::get($file));	
			}
			else{
				$img2 = 'sinfoto.jpg';
			}
			$abog = new abogados;
			$abog->archivo = $img2;
			$abog->num_folio = $request->num_folio;
			$abog->NomAbogado = $request->NomAbogado;	
			$abog->AppAbogado = $request->AppAbogado;
			$abog->ApmAbogado = $request->ApmAbogado;
			$abog->edad = $request->edad;
			$abog->sexo = $request->sexo;
			$abog->email = $request->email;
			$abog->telefono = $request->telefono;
			$abog->EstadoCivil = $request->EstadoCivil;
			$abog->id_est = $request->id_est;
			$abog->id_mun = $request->id_mun;
			$abog->IdTipoAbogado = $request->IdTipoAbogado;
			$abog->save();
			$proceso = "ALTA ABOGADO";
			$mensaje = "ABOGADO guardado correctamente";
			return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
		//return "$num_folio y $NomAbogado y $AppAbogado y $ApmAbogado y $edad y $sexo y $email y $telefono y $EstadoCivil y $id_est y $id_mun y $idTipoAbogado";

	public function reporteabogado(){
		if(Session::get('sesionidu')!="")
		{
			//$abogados = abogados::withTrashed()->orderBy('NomAbogado','asc')->get();
		
		$abogado=abogados::withTrashed()->orderBy('num_folio','desc')->get();
		$resultado=\DB::select("SELECT a.num_folio,a.NomAbogado,a.AppAbogado,a.AppAbogado,a.ApmAbogado,a.sexo,a.email,a.telefono,a.edad,ta.TipoAbogado,a.Archivo,a.deleted_at
            FROM abogados AS a 
            INNER JOIN tipo_abogados AS ta ON a.IdTipoAbogado = ta.IdTipoAbogado");
            //return $abogados;
		    return view ('sistema.repabogado')->with('abogado',$resultado);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function eliminaabogado($num_folio){
		if(Session::get('sesionidu')!="")
		{
		//echo "Elimina $num_folio";
			abogados::find($num_folio)->delete();
			$proceso = "Eliminar Abogado";
			$mensaje = "El Abogado ha sido borrado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function restarurarabogado($num_folio){
		if(Session::get('sesionidu')!="")
		{
			abogados::withTrashed()->where('num_folio',$num_folio)->restore();
			$proceso = "Restaurar Abogado";
			$mensaje = "El Abogado ha sido restaurado correctamente";
			return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function modificaabogado($num_folio){
		if(Session::get('sesionidu')!="")
		{
		$abogados= abogados::where('num_folio','=',$num_folio)->get();
		$id_est = $abogados [0]->id_est;
		$id_mun = $abogados [0]->id_mun;
		$IdTipoAbogado = $abogados [0]->IdTipoAbogado; 

		$estado = estados::where('id_est','=',$id_est)->get();
		$todas1 = estados::where('id_est','!=',$id_est)->get();

		$municipio = municipios::where('id_mun','=',$id_mun)->get();
		$todas2 = municipios::where('id_mun','!=',$id_mun)->get();
		
		$tipoabogado = DB::table('tipo_abogados')->where('IdTipoAbogado', $IdTipoAbogado)->get();
		$todas3 = DB::table('tipo_abogados')->where('IdTipoAbogado','<>', $IdTipoAbogado)->get();
		return view('sistema.modificaabogado')
		->with('abogados',$abogados[0])
      
		->with('id_est',$id_est)
		->with('estado',$estado[0]->NomEstado)
		->with('todas1',$todas1)

		->with('id_mun',$id_mun)
		->with('municipio',$municipio[0]->NomMunicipio)
		->with('todas2',$todas2)

		->with('IdTipoAbogado',$IdTipoAbogado)
		->with('tipoabogado',$tipoabogado[0]->TipoAbogado)
		->with('todas3',$todas3);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}

	}


	public function guardaedicionabogado(Request $request){
		if(Session::get('sesionidu')!="")
		{
			$num_folio = $request->num_folio;
		$NomAbogado = $request->NomAbogado;
		$AppAbogado = $request->AppAbogado;
		$ApmAbogado = $request->ApmAbogado;
		$edad = $request->edad;
		$sexo = $request->sexo;
		$email = $request->email;
		$telefono = $request->telefono;
		$EstadoCivil = $request->EstadoCivil;
		// $id_est = $request->id_est;
		// $id_mun = $request->id_mun;
		// $IdTipoAbogado = $request->IdTipoAbogado;
		// $archivo = $request->archivo;
		
		
		
		
		$this->validate($request,[
			'num_folio'=>'required|alpha_num',//['required','regex:/^([A-Za-z0-9 ])+$/'],
			'NomAbogado'=>['required','regex:/^[\pL\s\-]+$/u'],
			'AppAbogado'=>['required','regex:/^[\pL\s\-]+$/u'],
			'ApmAbogado'=>['required','regex:/^[\pL\s\-]+$/u'],
			'edad'=>'required|integer|min:18|max:80',
			'sexo'=>'required|alpha|max:2',
			'email'=>'required|email',
			'telefono'=>['required','regex:/^[0-9]{10}$/'],
			'EstadoCivil'=>'required|alpha',
			'Archivo' => 'image|mimes:jpg,jpeg,gif,png'
			
		]);

		$file = $request->file('archivo');
		if ($file!="")
		{
			
			$ldate = date('Ymd_His_');
			$img = $file->getClientOriginalName();
			$img2 = $ldate.$img;
			\Storage::disk('local')->put($img2, \File::get($file));
		}

		$abog = abogados::find($num_folio);
		if ($file!="") {
			$abog->archivo = $img2;
		}
		
	//return "$num_folio y $NomAbogado y $AppAbogado y $ApmAbogado y $edad y $sexo y $email y $telefono y $EstadoCivil y $id_est y $id_mun y $IdTipoAbogado y $Archivo";
		

		$abog->num_folio = $request->num_folio;
		$abog->NomAbogado = $request->NomAbogado;	
		$abog->AppAbogado = $request->AppAbogado;
		$abog->ApmAbogado = $request->ApmAbogado;
		$abog->edad = $request->edad;
		$abog->sexo = $request->sexo;
		$abog->email = $request->email;
		$abog->telefono = $request->telefono;
		$abog->EstadoCivil = $request->EstadoCivil;
		$abog->id_est = $request->id_est;
		$abog->id_mun = $request->id_mun;
		$abog->IdTipoAbogado = $request->IdTipoAbogado;
		$abog->save();
		$proceso = "Modifica ABOGADO";
		$mensaje = "ABOGADO actualizado correctamente";
		return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}


///Clientes///

	public function altaclientes(){
		if(Session::get('sesionidu')!="")
		{
			$clavequesigue = clientes::orderBy('id_cte','desc')->take(1)->get();
			$id_ctes = $clavequesigue[0]->id_cte+1;

			$estados = estados::orderBy('NomEstado','asc')->get();

			$municipios = municipios::orderBy('NomMunicipio','asc')->get();

			$abogados = abogados::orderBy('NomAbogado','asc')->get();

			$tipo_archivos = tipo_archivos::orderBy('NomArchivo','asc')->get();

			return view ('sistema.altaclientes')
			->with('id_ctes',$id_ctes)
			->with('estados',$estados)
			->with('municipios',$municipios)
			->with('abogados',$abogados)
			->with('tipo_archivos',$tipo_archivos);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function guardaclientes(Request $request){
		if(Session::get('sesionidu')!="")
		{
			$id_cte = $request->id_cte;
			$NomCliente = $request->NomCliente;
			$AppCliente = $request->AppCliente;
			$ApmCliente = $request->ApmCliente;
			$edad = $request->edad;
			$sexo = $request->sexo;
			$email = $request->email;
			$telefono = $request->telefono;
			$EstadoCivilCte = $request->EstadoCivilCte;
			$id_est = $request->id_est;
			$id_mun = $request->id_mun;
			$num_folio = $request->num_folio;
			$id_TipoArchivo = $request->id_TipoArchivo;


		//no se recibe el archivo

			$this->validate($request,[
				'id_cte'=>'required|numeric',
				'NomCliente'=>['required','regex:/^[\pL\s\-]+$/u'],
				'AppCliente'=>'required|alpha',
				'ApmCliente'=>'required|alpha',
				'edad'=>'required|integer|min:18|max:70',
				'sexo'=>'required|alpha|max:2',
				'email'=>'required|email',
				'telefono'=>['required','regex:/^[0-9]{10}$/'],
				'EstadoCivilCte'=>'required|alpha',

			]);


			$cli = new clientes;
			$cli->id_cte = $request->id_cte;
			$cli->NomCliente = $request->NomCliente;	
			$cli->AppCliente = $request->AppCliente;
			$cli->ApmCliente = $request->ApmCliente;
			$cli->edad = $request->edad;
			$cli->sexo = $request->sexo;
			$cli->email = $request->email;
			$cli->telefono = $request->telefono;
			$cli->EstadoCivilCte = $request->EstadoCivilCte;
			$cli->id_est = $request->id_est;
			$cli->id_mun = $request->id_mun;
			$cli->num_folio = $request->num_folio;
			$cli->id_TipoArchivo = $request->id_TipoArchivo;
			$cli->save();
			$proceso = "ALTA Cliente";
			$mensaje = "Cliente guardado correctamente";
			return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
			//return "$id_cte y $NomCliente y $AppCliente y $ApmCliente y $edad y $sexo y $email y $telefono y $EstadoCivilCte y $id_est y $id_mun y $idTipoAbogado y $id_TipoArchivo";
		

	}

	public function reporteclientes(){
		if(Session::get('sesionidu')!="")
		{
			$clientes = clientes::withTrashed()->orderBy('NomCliente','asc')->get();
			return view ('sistema.repclientes')->with('clientes',$clientes);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function eliminacliente($id_cte){
		if(Session::get('sesionidu')!="")
		{
			clientes::find($id_cte)->delete();
			$proceso = "Eliminar Cliente";
			$mensaje = "El Cliente ha sido borrado correctamente";
			return view('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function restarurarcliente($id_cte){
		if(Session::get('sesionidu')!="")
		{
			clientes::withTrashed()->where('id_cte',$id_cte)->restore();
			$proceso = "Restaurar Cliente";
			$mensaje = "El Cliente ha sido restaurado correctamente";
			return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}


	public function modificacliente($id_cte){
		if(Session::get('sesionidu')!="")
		{
		$clientes= clientes::where('id_cte','=',$id_cte)->get();
		$id_est = $clientes [0]->id_est;
		$id_mun = $clientes [0]->id_mun;
		$num_folio = $clientes [0]->num_folio;
		$id_TipoArchivo = $clientes [0]->id_TipoArchivo; 

		$estado = estados::where('id_est','=',$id_est)->get();
		$todas1 = estados::where('id_est','!=',$id_est)->get();

		$municipio = municipios::where('id_mun','=',$id_mun)->get();
		$todas2 = municipios::where('id_mun','!=',$id_mun)->get();

		$abogado = abogados::where('num_folio','=',$num_folio)->get();
		$todas3 = abogados::where('num_folio','!=',$num_folio)->get();

		$tipoarchivo = tipo_archivos::where('id_TipoArchivo','=',$id_TipoArchivo)->get();
		$todas4 = tipo_archivos::where('id_TipoArchivo','!=',$id_TipoArchivo)->get();
		return view ('sistema.modificacliente')

		->with('clientes',$clientes[0])

		->with('id_est',$id_est)
		->with('estado',$estado[0]->NomEstado)
		->with('todas1',$todas1)

		->with('id_mun',$id_mun)
		->with('municipio',$municipio[0]->NomMunicipio)
		->with('todas2',$todas2)

		->with('num_folio',$num_folio)
		->with('abogado',$abogado[0]->NomAbogado)
		->with('todas3',$todas3)

		->with('id_TipoArchivo',$id_TipoArchivo)
		->with('tipoarchivo',$tipoarchivo[0]->NomArchivo)
		->with('todas4',$todas4);

		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}

	}


	public function guardaedicioncliente(Request $request){
		if(Session::get('sesionidu')!="")
		{
			$id_cte = $request->id_cte;
			$NomCliente = $request->NomCliente;
			$AppCliente = $request->AppCliente;
			$ApmCliente = $request->ApmCliente;
			$edad = $request->edad;
			$sexo = $request->sexo;
			$email = $request->email;
			$Telefono = $request->Telefono;
			$EstadoCivilCte = $request->EstadoCivilCte;
			$id_est = $request->id_est;
			$id_mun = $request->id_mun;
			$num_folio = $request->num_folio;
			$id_TipoArchivo = $request->id_TipoArchivo;



		//no se recibe el archivo

			$this->validate($request,[
				'id_cte'=>'required|numeric',
				'NomCliente'=>['required','regex:/^[\pL\s\-]+$/u'],
				'AppCliente'=>'required|alpha',
				'ApmCliente'=>'required|alpha',
				'edad'=>'required|integer|min:18|max:70',
				'sexo'=>'required|alpha|max:2',
				'email'=>'required|email',
				'Telefono'=>['required','regex:/^[0-9]{10}$/'],
				'EstadoCivilCte'=>'required|alpha',

			]);
			//return "$id_cte y $NomCliente y $AppCliente y $ApmCliente y $edad y $sexo y $email y $Telefono y $EstadoCivilCte y $id_est y $id_mun y $num_folio y $id_TipoArchivo";

			$cli = clientes::find($id_cte);

			$cli->id_cte = $request->id_cte;
			$cli->NomCliente = $request->NomCliente;

			$cli->AppCliente = $request->AppCliente;
			$cli->ApmCliente = $request->ApmCliente;
			$cli->edad = $request->edad;
			$cli->sexo = $request->sexo;
			$cli->email = $request->email;
			$cli->Telefono = $request->Telefono;
			$cli->EstadoCivilCte = $request->EstadoCivilCte;
			$cli->id_est = $request->id_est;
			$cli->id_mun = $request->id_mun;
			$cli->num_folio = $request->num_folio;
			$cli->id_TipoArchivo = $request->id_TipoArchivo;
			$cli->save();
			$proceso = "Modifica Cliente";
			$mensaje = "Cliente corregido correctamente";
			return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);

		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}

	}

///Juicios///

	public function altajuicio(){
		if(Session::get('sesionidu')!="")
		{
			$clavequesigue = juicio::orderBy('num_juicio','desc')->take(1)->get();
			$num_juicios = $clavequesigue[0]->num_juicio+1;

			$tipo_juicios = tipo_juicios::orderBy('NomTipoJuicio','asc')->get();

			$clientes = clientes::orderBy('NomCliente','asc')->get();

			$abogados = abogados::orderBy('NomAbogado','asc')->get();

			$tipo_archivos = tipo_archivos::orderBy('Id_TipoArchivo','asc')->get();

			$juzgados = juzgados::orderBy('FolioJuzgado')->get();
			return view ('sistema.altajuicio')
			->with('num_juicios',$num_juicios)
			->with('tipo_juicios',$tipo_juicios)
			->with('clientes',$clientes)
			->with('abogados',$abogados)
			->with('tipo_archivos',$tipo_archivos)
			->with('juzgados',$juzgados);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function guardajuicio(Request $request){
		if(Session::get('sesionidu')!="")
		{
			$num_juicio = $request->num_juicio;
			$NomDemandante = $request->NomDemandante;
			$id_TipoJuicio = $request->id_TipoJuicio;
			$FechaDemanda = $request->FechaDemanda;
			$FechaAuditoria = $request->FechaAuditoria;
			$id_cte = $request->id_cte;
			$num_folio = $request->num_folio;
			$id_TipoArchivo = $request->id_TipoArchivo;
			$FolioJuzgado = $request->FolioJuzgado;

		//no se recibe el archivo

			$this->validate($request,[
				'num_juicio'=>'required|numeric',
				'NomDemandante'=>['required','regex:/^[\pL\s\-]+$/u'],
			'FechaDemanda'=>'required',//[,'regex:/^\d{4}-\d{2}-\d{2}$/'],
			//'FechaAuditoria'=>['required','regex:/^\d{4}-\d{2}-\d{2}$/'],
			'archivo' => 'mimes:xlsx,pdf,docx,pptx|max:10000'

		]);
			$file = $request->file('archivo');
			if($file!=""){
		 	//ldate => 20180928_063455_
				$ldate = date('Ymd_His_');
				$ldate2 = date('Y-m-d');
			 //$img = normita.jpg
				$doc = $file->getClientOriginalName();
			 //img2 = 20180928_063455_normita.jpg
				$doc2 = $ldate.$doc;

				\Storage::disk('local')->put($doc2, \File::get($file));	
			}
			else{
				$doc2 = 'sindocumento';
			}
			if($file!=""){
				$arc = new archivos();
				$arc->NomArchivo =$doc; 
				$arc->FechaCreacion = $ldate2;
				$arc->id_TipoArchivo = $request->id_TipoArchivo;
				$arc->URL = $doc2;
				if($doc2=='sindocumento'){
					$arc->activo = 'No';
				}
				$arc->activo = 'Si';
				$arc->save();
			}
			$jui = new juicio;
			$jui->num_juicio = $request->num_juicio;
			$jui->NomDemandante = $request->NomDemandante;	
			$jui->id_TipoJuicio = $request->id_TipoJuicio;
			$jui->FechaDemanda = $request->FechaDemanda;
			$jui->FechaAuditoria = $request->FechaAuditoria;
			$jui->id_cte = $request->id_cte;
			$jui->num_folio = $request->num_folio;
			$jui->id_TipoArchivo = $request->id_TipoArchivo;
			$jui->FolioJuzgado = $request->FolioJuzgado;
			$jui->archivo = $doc2;
			$jui->save();
			$proceso = "Alta Juicio";
			$mensaje = "Juicio guardado correctamente";
			return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function reportejuicio(){
		if(Session::get('sesionidu')!="")
		{
		$juicio=juicio::withTrashed()->orderBy('num_juicio','desc')->get();
		$resultado=\DB::select("SELECT j.num_juicio,j.NomDemandante,j               .FechaDemanda,j.FechaAuditoria,
            	j.FolioJuzgado,j.archivo,tj.NomTipoJuicio,c.NomCliente,c.AppCliente,c.ApmCliente,a.NomAbogado,a.AppAbogado,a.ApmAbogado
	            ,j.deleted_at
            FROM juicios AS j 
            INNER JOIN tipo_juicios AS tj ON tj.id_TipoJuicio = j.id_TipoJuicio
            INNER JOIN clientes AS c ON c.id_cte = j.id_cte
            INNER JOIN abogados AS a ON a.num_folio = j.num_folio");
			//return $resultado;
			return view ('sistema.repjuicio')->with('juicio',$resultado);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	
	public function eliminajuicio($num_juicio){
		if(Session::get('sesionidu')!="")
		{
			juicio::find($num_juicio)->delete();
		$proceso = "Eliminar Juicio";
		$mensaje = "El Juicio ha sido borrado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function restarurarjuicio($num_juicio){
		if(Session::get('sesionidu')!="")
		{
			juicio::withTrashed()->where('num_juicio',$num_juicio)->restore();
			$proceso = "Restaurar Juicio";
			$mensaje = "El Juicio ha sido restaurado correctamente";
			return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}


	public function modificajuicio($num_juicio){
		if(Session::get('sesionidu')!="")
		{
			$juicio= juicio::withTrashed()->where('num_juicio','=',$num_juicio)->get();
			$FolioJuzgado = $juicio [0]->FolioJuzgado;
			$id_cte = $juicio [0]->id_cte;
			$id_TipoArchivo = $juicio [0]->id_TipoArchivo;
			$id_TipoJuicio = $juicio [0]->id_TipoJuicio;
			$num_folio = $juicio [0]->num_folio; 
			$doc = $juicio [0]->archivo; 
			//return $id_TipoArchivo;
			if(preg_match('/xlsx/i', $doc)){
				$doctip="excel.png";	
			}
			else if($doc=="sindocumento"){
				$doctip="advertencia.png";
				$doc='No hay un documento asignado';
			}
			else if(preg_match('/xlsx/i', $doc)){
				$doctip="advertencia.png";
				$doc='No hay un documento asignado';
			}
			else if(preg_match('/docx/i', $doc)){
				$doctip="word.png";
			}
			else if(preg_match('/pdf/i', $doc)){
				$doctip="pdf.png";
			}
			else if(preg_match('/pptx/i', $doc)){
				$doctip="pdf.png";
			}
			$juzgado = juzgados::where('FolioJuzgado','=',$FolioJuzgado)->get();
			$todas1 = juzgados::where('FolioJuzgado','!=',$FolioJuzgado)->get();

			$cliente = clientes::where('id_cte','=',$id_cte)->get();
			$todas2 = clientes::where('id_cte','!=',$id_cte)->get();

			$tipo_archivo = DB::table('tipo_archivos')->where('id_TipoArchivo','=',$id_TipoArchivo)->get();
			$todas3 = tipo_archivos::where('id_TipoArchivo','!=',$id_TipoArchivo)->get();

			$tipojuicio = tipo_juicios::where('id_TipoJuicio','=',$id_TipoJuicio)->get();
			$todas4 = tipo_juicios::where('id_TipoJuicio','!=',$id_TipoJuicio)->get();

			$abogado = abogados::where('num_folio','=',$num_folio)->get();
			$todas5 = abogados::where('num_folio','!=',$num_folio)->get();
           // return $id_TipoArchivo;
			return view ('sistema.modificajuicio')

			->with('juicio',$juicio[0])

			->with('FolioJuzgado',$FolioJuzgado)
			->with('juzgado',$juzgado[0]->FolioJuzgado)
			->with('todas1',$todas1)

			->with('id_cte',$id_cte)
			->with('cliente',$cliente[0]->NomCliente)
			->with('todas2',$todas2)

			->with('id_TipoArchivo',$id_TipoArchivo)
			->with('tipo_archivo',$tipo_archivo[0]->NomArchivo)
			->with('todas3',$todas3)

			->with('id_TipoJuicio',$id_TipoJuicio)
			->with('tipojuicio',$tipojuicio[0]->NomTipoJuicio)
			->with('todas4',$todas4)

			->with('num_folio',$num_folio)
			->with('abogado',$abogado[0]->NomAbogado)
			->with('todas5',$todas5)
			->with('doc',$doc)
			->with('doctip',$doctip);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}

	}

	public function guardaedicionjuicio(Request $request){
		if(Session::get('sesionidu')!="")
		{
		    
		$num_juicio = $request->num_juicio;
		$NomDemandante = $request->NomDemandante;
	$id_TipoJuicio = $request->id_TipoJuicio;
		$FechaDemanda = $request->FechaDemanda;
		$FechaAuditoria = $request->FechaAuditoria;
			$id_cte = $request->id_cte;
			$num_folio = $request->num_folio;
			$id_TipoArchivo = $request->id_TipoArchivo;
			$FolioJuzgado = $request->FolioJuzgado;
		
		//$id_TipoArchivo = $request->id_TipoArchivo;
	
		//no se recibe el archivo

		$this->validate($request,[
			'num_juicio'=>'required|numeric',
			'NomDemandante'=>['required','regex:/^[\pL\s\-]+$/u'],
			'FechaDemanda'=>'required',//[,'regex:/^\d{4}-\d{2}-\d{2}$/'],
			'archivo' => 'mimes:xlsx,pdf,docx,pptx|max:10000'

		]);
		$file = $request->file('archivo');
		if($file!=""){
		 	//ldate => 20180928_063455_
			$ldate = date('Ymd_His_');
			$ldate2 = date('Y-m-d');
			 //$img = normita.jpg
			$doc = $file->getClientOriginalName();
			 //img2 = 20180928_063455_normita.jpg
			$doc2 = $ldate.$doc;

			\Storage::disk('local')->put($doc2, \File::get($file));	
		}
		if($file!=""){
			$arc = new archivos();
			$arc->NomArchivo =$doc; 
			$arc->FechaCreacion = $ldate2;
			$arc->id_TipoArchivo = $request->id_TipoArchivo;
			$arc->URL = $doc2;
			if($doc2=='sindocumento'){
				$arc->activo = 'No';
			}
			$arc->activo = 'Si';
		    $arc->save();

		}
        
		$jui = juicio::find($num_juicio);
		if($file!=""){
		    $jui->archivo = $doc2;
		}
			//return "$num_juicio y $NomDemandante y $id_TipoJuicio y $FechaDemanda y $FechaAuditoria y $id_cte y $num_folio y $id_TipoArchivo y $FolioJuzgado y $doc2";
		$jui->num_juicio = $request->num_juicio;
		$jui->NomDemandante = $request->NomDemandante;	
		$jui->id_TipoJuicio = $request->id_TipoJuicio;
		$jui->FechaDemanda = $request->FechaDemanda;
		$jui->FechaAuditoria = $request->FechaAuditoria;
		$jui->id_cte = $request->id_cte;
		$jui->num_folio = $request->num_folio;
		$jui->id_TipoArchivo = $request->id_TipoArchivo;
		$jui->FolioJuzgado = $request->FolioJuzgado;
		$jui->save();
		$proceso = "Modifica Juicio";
		$mensaje = "Juicio corregido correctamente";
		return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

///Juzgados///
	public function altajuzgados(){
		if(Session::get('sesionidu')!="")
		{
			$tipo_juzgados = DB::table('tipo_juzgados')->orderBy('TipoJuzgado','desc')->get();
			return view ('sistema.altajuzgados')
			->with('tipo_juzgados',$tipo_juzgados);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function guardajuzgados(Request $request){
		if(Session::get('sesionidu')!="")
		{
			$FolioJuzgado = $request->FolioJuzgado;
			$Pais = $request->Pais;
			$No_Juzgado = $request->No_Juzgado;
			$id_TipoJuzgado = $request->id_TipoJuzgado;
			$Localizacion = $request->Localizacion;


		//no se recibe el archivo

			$this->validate($request,[
				'FolioJuzgado'=>'required|alpha_num',
				'Pais'=>['regex:/^México$/i'],
				'No_Juzgado'=>'required|numeric',


			]);

			$juz = new juzgados;
			$juz->FolioJuzgado = $request->FolioJuzgado;
			$juz->Pais = $request->Pais;	
			$juz->No_Juzgado = $request->No_Juzgado;
			$juz->id_TipoJuzgado = $request->id_TipoJuzgado;
			$juz->Localizacion = $request->Localizacion;
			$juz->save();
			$proceso = "ALTA Juzgado";
			$mensaje = "Juzgado guardado correctamente";
			return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function reportejuzgados(){
		if(Session::get('sesionidu')!="")
		{
			$juzgados = juzgados::withTrashed()
			->join('tipo_juzgados','juzgados.id_TipoJuzgado','=','tipo_juzgados.id_TipoJuzgado')
			->select('juzgados.*','tipo_juzgados.TipoJuzgado')
			->orderBy('FolioJuzgado','asc')
			->get();
			return view ('sistema.repjuzgados')->with('juzgados',$juzgados);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function eliminajuzgado($FolioJuzgado){
		if(Session::get('sesionidu')!="")
		{
			juzgados::find($FolioJuzgado)->delete();
			$proceso = "Eliminar Juzgados";
			$mensaje = "El Juzgados ha sido borrado correctamente";
			return view('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}

	public function restarurarjuzgado($FolioJuzgado){
		if(Session::get('sesionidu')!="")
		{
			juzgados::withTrashed()->where('FolioJuzgado',$FolioJuzgado)->restore();
			$proceso = "Restaurar Juzgados";
			$mensaje = "El Juzgados ha sido restaurado correctamente";
			return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}


	public function modificajuzgado($FolioJuzgado){
		if(Session::get('sesionidu')!="")
		{
			$juzgados= DB::table('juzgados')->where('FolioJuzgado','=',$FolioJuzgado)->get();
			
			$id_TipoJuzgado = $juzgados [0]->id_TipoJuzgado;
			

			$juzgado = DB::table('tipo_juzgados')->where('id_TipoJuzgado','=',$id_TipoJuzgado)->get();
			
			$todas = tipo_juzgados::where('id_TipoJuzgado','!=',$id_TipoJuzgado)->get();

			return view ('sistema.modificajuzgado')

			->with('juzgados',$juzgados[0])

			->with('id_TipoJuzgado',$id_TipoJuzgado)
			->with('juzgado',$juzgado[0]->TipoJuzgado)
			->with('todas',$todas);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}

	}

	public function guardaedicionjuzgado(Request $request){
		if(Session::get('sesionidu')!="")
		{
			$FolioJuzgado = $request->FolioJuzgado;
			$Pais = $request->Pais;
			$No_Juzgado = $request->No_Juzgado;
			$Localizacion = $request->Localizacion;
			
			
		//no se recibe el archivo

			$this->validate($request,[
				'FolioJuzgado'=>'required|alpha_num',
				'Pais'=>['regex:/^México$/i'],
				'No_Juzgado'=>'required|numeric',
				
				
			]);

			$juz = juzgados::find($FolioJuzgado);
			$juz->FolioJuzgado = $request->FolioJuzgado;
			$juz->Pais = $request->Pais;	
			$juz->No_Juzgado = $request->No_Juzgado;
			$juz->id_TipoJuzgado = $request->id_TipoJuzgado;
			$juz->Localizacion = $request->Localizacion;
			$juz->save();
			$proceso = "Modifica Juzgado";
			$mensaje = "Juzgado actualizado correctamente";
			return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}

		
	}
	public function contar_abogados(){
		if(Session::get('sesionidu')!="")
		{
			$abogados = DB::table('abogados')
			->select(DB::raw('count(*) as abogados'))
			->get();

			$juicios = DB::table('juicios')
			->select(DB::raw('count(*) as juicios'))
			->get();
			$clientes = DB::table('clientes')
			->select(DB::raw('count(*) as clientes'))
			->get();
			$juzgados = DB::table('juzgados')
			->select(DB::raw('count(*) as juzgados'))
			->get();
			return view("sistema.dashboard")
			->with('abogados',$abogados)
			->with('juicios',$juicios)
			->with('clientes',$clientes)
			->with('juzgados',$juzgados);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
	}
	public function conocenos(){
	     return view('sistema.conocenos');
	}
	public function servicios(){
	     return view('sistema.catalogo');
	}
	public function downloadFile($doc){
      $pathtoFile = public_path().'archivos/'.$doc;
      return response()->download($pathtoFile);
    }
    public function archivosXCliente(){
      if(Session::get('sesionidu')!="")
		{
		//$juicio=juicio::withTrashed()->orderBy('num_juicio','desc')->get();
		$resultado=\DB::select("SELECT j.num_juicio,j.NomDemandante,j               .FechaDemanda,j.FechaAuditoria,
            	j.FolioJuzgado,j.archivo,tj.NomTipoJuicio,j.archivo,c.NomCliente,c.AppCliente,c.ApmCliente,a.NomAbogado,a.AppAbogado,a.ApmAbogado
	            ,j.deleted_at
            FROM juicios AS j 
            INNER JOIN tipo_juicios AS tj ON tj.id_TipoJuicio = j.id_TipoJuicio
            INNER JOIN clientes AS c ON c.id_cte = j.id_cte
            INNER JOIN abogados AS a ON a.num_folio = j.num_folio");
			
			return view ('sistema.archivosXCliente')->with('resultado',$resultado);
			//->with('doctip',$doctip);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
    }
    public function juicioModal(){

    	return view('sistema.juicioModal');
    	//Session::flash('flash_message', 'Mensaje de prueba');

    }
    public function archivoCliente(){
    	if(Session::get('sesionidu')!="")
		{
		//$juicio=juicio::withTrashed()->orderBy('num_juicio','desc')->get();
		$resultado=\DB::select("SELECT j.num_juicio,j.NomDemandante,j.FechaDemanda,j.FechaAuditoria,
            	j.FolioJuzgado,j.archivo,tj.NomTipoJuicio,j.archivo,c.id_cte,c.NomCliente,c.AppCliente,c.ApmCliente,a.NomAbogado,a.AppAbogado,a.ApmAbogado
	            ,j.deleted_at
            FROM juicios AS j 
            INNER JOIN tipo_juicios AS tj ON tj.id_TipoJuicio = j.id_TipoJuicio
            INNER JOIN clientes AS c ON c.id_cte = j.id_cte
            INNER JOIN abogados AS a ON a.num_folio = j.num_folio
            WHERE c.NomCliente='".Session::get('sesionname')."'");
			
			return view ('sistema.archivosCliente')->with('resultado',$resultado);
			//->with('doctip',$doctip);
		}
		else{
			Session::flash('error', 'El usuario esta desactivado o no esta logueado, favor de consultar a su administrador');
			return redirect()->route('login');
		}
    }
    public function impresion(Request $request){
    $clientes = $request->field_name;
    //Print the values
    print_r($clientes);
    $promoventes = $request->field_namePromo;
    //Print the values
    print_r($promoventes);
    }
    public function retraccion(){
    	return view('sistema.pruebadeconjunto');
    }
}
