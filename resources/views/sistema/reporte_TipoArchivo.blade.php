@extends('sistema.app')

@section('body')
<h1 align="center">Tipos de Archivos usados para los clientes en Despacho Velazquez</h1>
<table border="1" align="center" class="table table-dark table-hover">
	<tr><th scope="col">Clave</th><th scope="col">Tipo Archivo</th><th scope="col">Operaciones</th>	
	</tr>
	@foreach($TipArc as $tar)
	<tr><th scope="row">{{$tar->id_TipoArchivo}}</th>
		<td>{{$tar->NomArchivo}}</td>
		<td>
			@if($tar->deleted_at=="")
			
			<a href="{{URL::action('controlador_abogados@eliminatipoarchivo', ['id_TipoArchivo'=>$tar->id_TipoArchivo])}}" class="icon-trash"></a>
			<a href="{{URL::action('controlador_abogados@modificamTArc', ['id_TipoArchivo'=>$tar->id_TipoArchivo])}}"class="icon-pencil"></a>
			@else
			<a href="{{URL::action('controlador_abogados@guardaedicionmTArc', ['id_TipoArchivo'=>$tar->id_TipoArchivo])}}" class="icon-arrow-sync-outline"></a>
			@endif

		</td></tr>
		@endforeach
	</table>
	@stop