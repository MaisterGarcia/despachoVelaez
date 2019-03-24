@extends('sistema.app')


@section("body")	
	<div class="row">
		<div class="col-xs-12 col-md-12">

			<div class="card">
				<div class="card-header">
					Submaterias
				</div>
				<div class="card-body">
					<h5 class="card-title">Submaterias</h5>
					<form action="{{route('guardaSubmateria')}}" method="POST" align="center">
						{{csrf_field()}}

						@if($errors->first('id_Submateria'))
						<i> {{ $errors->first('id_Submateria')}} </i> 
						@endif	<br>

						Clave Submateria: <input type = 'text' name = 'id_Submateria' value="{{$idSubm}}" readonly = 'readonly' class="form-control">
						<br>
						@if($errors->first('NomSubmateria'))
						<i> {{ $errors->first('NomSubmateria')}} </i> 
						@endif	<br>
						Nombre de Submateria a Realizar: <input type = 'text' name = 'NomSubmateria' value="{{old('NomSubmateria')}}" class="form-control" placeholder="Inserta nombre de submateria empezando solo la primera palabra con mayúsculas"><br><br>
						<center><div class="form-group col-md-4">
							<label for="num_juicio">Seleccione Nombre de Demandante a Asignar:</label>
							<select name = 'num_juicio' class="form-control">
								@foreach($juicios as $jui)
								<option value = '{{$jui->num_juicio}}'>{{$jui->NomDemandante}}</option>
								@endforeach
							</select>
							<br><br>
						</div>
						</center>
						<!-- <input type="submit" name="" class="btn btn-primary"> -->
						<button class="btn btn-success">Guardar</button>
						<button class="btn btn-warning">Cancelar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop	