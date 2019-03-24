@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body")
<link rel="stylesheet" href="css/bootstrap-date.css">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<div class="row fixed">
	<div class="col-xs-12 col-md-12">
		<div class="card">
			<div class="card-header">
				Tareas
			</div>
			<div class="card-body">
				<h3 class="card-title">Regitsrar Tarea</h3>
				<form action ="{{route('guardaTarea')}}" method = 'POST' align="center">
					{{csrf_field()}}
					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								@if($errors->first('id_Tarea'))
								<i> {{ $errors->first('id_Tarea') }} </i> 
								@endif	<br>

								Clave Tarea: <input type = 'text' name = 'id_Tarea' value="{{$idTarea}}" readonly = 'readonly' class="form-control">
							</div>
							<div class="form-group col-6">
								@if($errors->first('NomTarea'))
								<i> {{ $errors->first('NomTarea') }} </i> 
								@endif	<br>
								Nombre de Tarea a Realizar: <input type = 'text' name = 'NomTarea' value="{{old('NomTarea')}}" class="form-control">
							</div>
							<div class="col-md-6 ">
								@if($errors->first('FechaLimite'))
								<i> {{ $errors->first('FechaLimite') }} </i> 
								@endif
								<div class="well well-sm">
									<div class='input-group date' id='divMiCalendario'>
										Introduzca Fecha de Limite de Realización de Tarea:<input type='text' id="txtFecha" class="form-control"  readonly name = 'FechaLimite' value="{{old('FechaLimite')}}"/>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>	
							</div>
						</div>
						<div class="col-md-6 ">
								@if($errors->first('FechaFin'))
						<i> {{ $errors->first('FechaFin') }} </i> 
						@endif
						<div class="well well-sm">
								<div class='input-group date' id='divMiCalendario2'>
									Introduzca Fecha de Limite de Realización de Tarea:<input type='text' id="txtFecha" class="form-control"  readonly name = 'FechaLimite' value="{{old('FechaLimite')}}"/>
									<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>	
						</div>
						</div>
						<div class="form-group col-6">
							<label for="num_folio">Seleccione Abogado a Asignar:</label>
							<select name = 'num_folio' class="form-control">
								@foreach($abogados as $ab)
								<option value = '{{$ab->num_folio}}'>{{$ab->NomAbogado.' '.$ab->AppAbogado.' '.$ab->ApmAbogado}}</option>
								@endforeach
							</select>
							</div>
							<div class="form-group col-6">
							Seleccione Estado de la Tarea:
							<select name = 'id_EstTar' class="form-control">
								@foreach($estadoTarea as $et)
								<option value = '{{$et->id_EstTar}}'>{{$et->EstadoTarea}}</option>
								@endforeach
							</select>
						</div>
				</div>
				<input type = 'submit' value = 'Guardar' class="btn btn-success col-2">
				<input type = 'reset' value = 'Cancelar' class="btn btn-warning col-2">
			</div>
		</form>
	</div>
</div>
</div>
</div>
<!--FIN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-datetimepicker.es.js"></script>
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