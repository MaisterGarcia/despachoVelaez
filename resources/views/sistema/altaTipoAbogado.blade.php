@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body")
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				Abogados
			</div>
			<div class="card-body">
				<h3 class="card-title">Alta Tipo Abogado</h3>
				<form action ="{{route('guardaTipoAbogado')}}" method = 'POST' align="center">
					{{csrf_field()}}
					<div class="container col-12">
						<div class="row">
							<div class="col-6">
								@if($errors->first('IdTipoAbogado'))
								<i> {{ $errors->first('IdTipoAbogado') }} </i> 
								@endif	<br>

								Clave Tipo Abogado: <input type = 'text' name = 'IdTipoAbogado' value="{{$idTipAbs}}" readonly = 'readonly' class="form-control">
							</div>
							<div class="col-6">
								@if($errors->first('TipoAbogado')) 
								<i> {{ $errors->first('TipoAbogado') }} </i> 
								@endif	<br>
								Descripción del Tipo: <input type = 'text' name = 'TipoAbogado' value="{{old('TipoAbogado')}}" class="form-control" placeholder="Intruduce letras empezando la primera con mayúscula">
							</div>
						</div>
							<input type="submit" value="Guardar" class="btn btn-success col-2" >
							<input type="reset" value="Cancelar" class="btn btn-warning col-2" >
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 