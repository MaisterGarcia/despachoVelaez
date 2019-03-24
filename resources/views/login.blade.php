@extends('templates.app')

@section("body")
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-5 offset-md-2">

		<div class="card">	 
			<div class="card-header">
				Iniciar sesión
			</div>
			<div class="card-body">
				<h1 class="card-title">Iniciar sesión</h1>
				<form>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text">@</div>
						</div>
						<input type="" name="Usuario" class="form-control" placeholder="Usuario">
					</div>	
									
					<input type="" name="" class="form-control mb-3" placeholder="Contraseña">
					
					<!-- <input type="submit" name="" class="btn btn-primary"> -->
					<button class="btn btn-block btn-primary">Iniciar sesión</button>
					
				</form>
			</div>
		</div>
	</div>
</div>
@stop