@extends('../templates.app')


@section("body")
	<div class="row">
		<div class="col-xs-12 col-md-12">

			<div class="card">
				<div class="card-header">
					Formulario de registro
				</div>
				<div class="card-body">
					<h5 class="card-title">Submaterias</h5>
					<form action ="{{route('submaterias_store')}}" method='POST'>
						{{csrf_field()}}
						<input type="" name="id_Submateria" class="form-control" placeholder="Clave de la Submateria">
						<input type="text" name="NomSubmateria" class="form-control" placeholder="Nombre de la Submateria">
						<input type="text" name="nom_juicio" class="form-control" placeholder="Numero de Juicio">
						
						<input type="submit" name="" class="btn btn-primary" value="Guardar">
						<!-- <button class="btn btn-success">Guardar</button> -->
						<!-- <button class="btn btn-warning">Cancelar</button> -->
					</form>
				</div>
			</div>
		</div>
	</div>
	
@stop