@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body") 
<link rel="stylesheet" href="{{asset('css/bootstrap-date.css')}}">
<link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">   
<div class="row">
	<div class="col-12">
		<div class="card" >
			<div class="card-header">
				Juicios
			</div>
			<div class="card-body">
				<h3 class="card-title">Modifica Juicio</h3>
				<form role="form" action="{{route('guardaedicionjuicio')}}" method="POST" class="text-center row" enctype="multipart/form-data"> 
					{{csrf_field()}}
					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
							@if($errors->first('num_juicio'))
							<i> {{ $errors->first('num_juicio') }} </i>
							@endif
								Folio:<input type="text" placeholder="Folio..." name="num_juicio" value="{{$juicio->num_juicio}}" readonly='readonly' class="form-control">
							</div>
							<div class="form-group col-6">
							@if($errors->first('NomDemandante'))
							<i> {{ $errors->first('NomDemandante') }} </i>
							@endif
								Demandante:<input type="text" placeholder="Demandante..." name="NomDemandante" value="{{$juicio->NomDemandante}}" class="form-control">
							</div>
							<div class="col-md-6 ">
							@if($errors->first('FechaDemanda'))
							<i> {{ $errors->first('FechaDemanda') }} </i>
							@endif
							
								<div class="well well-sm">
									<div class='input-group date' id='divMiCalendario'>
										Fecha Demanda:<input type='text' id="txtFecha" class="form-control"  readonly name="FechaDemanda" value="{{$juicio->FechaDemanda}}" />
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>	
							</div>
						</div>
						<div class="col-md-6 ">
						@if($errors->first('FechaAuditoria'))
						<i> {{ $errors->first('FechaAuditoria') }} </i>
						@endif
						
								<div class="well well-sm">
									<div class='input-group date' id='divMiCalendario2'>
										Fecha Auditoria:<input type='text' id="txtFecha" class="form-control"  readonly name="FechaAuditoria" value="{{$juicio->FechaAuditoria}}"/>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>	
							</div>
						</div>

						<div class="form-group col-6">
							Selecciona Tipo de juicio:<select name="id_TipoJuicio" class="form-control">
								<option value='{{$id_TipoJuicio}}'>{{$tipojuicio}}</option>
								@foreach($todas1 as $tipojui)
								<option value= '{{$tipojui->id_TipoJuicio}}'> {{$tipojui->NomTipoJuicio}} 
								</option>	
								@endforeach
							</select>
							<br>
						</div>
						<div class="form-group col-6">
							Selecciona Cliente:<select name="id_cte" class="form-control">
								<option value='{{$id_cte}}'>{{$cliente}}</option>
								@foreach($todas2 as $cli)
								<option value= '{{$cli->id_cte}}' > {{$cli->NomCliente}} 
								</option>	
								@endforeach
							</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-6">Selecciona Abogado:
							<select name="num_folio" class="form-control">
								<option value='{{$num_folio}}'>{{$abogado}}</option>
								@foreach($todas5 as $numfol)
								<option value= '{{$numfol->num_folio}}'> {{$numfol->NomAbogado}} 
								</option>	
								@endforeach
							</select>
						</div>
						<div class="form-group col-6">Selecciona Nombre de archivo:
							<select name="id_TipoArchivo" class="form-control">
								<option value='{{$id_TipoArchivo}}'>{{$tipo_archivo}}</option>
								@foreach($todas3 as $archi)
								<option value= '{{$archi->id_TipoArchivo}}'> {{$archi->NomArchivo}} 
								</option>	
								@endforeach
							</select>
						</div>
						<div class="col-6">Selecciona Folio Juzgado:
							<select name="FolioJuzgado" class="form-control">
								<option value='{{$FolioJuzgado}}'>{{$juzgado}}</option>
								@foreach($todas1 as $foljuz)
								<option value= '{{$foljuz->FolioJuzgado}}'> {{$foljuz->FolioJuzgado}} 
								</option>	
								@endforeach
							</select>
						</div>
						<div class="form-group col-6">
								Selecciona Archivo (Si desea modificarlo):
								<input type="file" class="form-control-file" id="exampleFormControlFile1" name="archivo" value="{{$juicio->archivo}}">
							</div>
						<div class="form-group col-6">
								@if($errors->first('archivo'))
								<i> {{ $errors->first('archivo') }} </i>
								@endif 
									Archivo Asignado:<br>
									<img src=" {{asset('archivo/'.$doctip)}}" height="120" width="120"><br>
									{{$doc}}

							</div>
					</div>		
					<input type="submit" value="Guardar" class="btn btn-success col-2">
					<input type="submit" value="Cancelar" class="btn btn-warning col-2">
				</div>	
			</form>
		</div>
	</div>
</div>
</div>
<!--FIN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.es.js')}}"></script>
<script type="text/javascript">
	$('#divMiCalendario').datetimepicker({
		format: 'YYYY-MM-DD '    
	});
	//$('#divMiCalendario').data("DateTimePicker").show();
	$('#divMiCalendario2').datetimepicker({
		format: 'YYYY-MM-DD '    
	});
	//$('#divMiCalendario2').data("DateTimePicker").show();
</script>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 