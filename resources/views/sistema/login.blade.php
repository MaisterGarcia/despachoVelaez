@extends('templates.app')

@section("body")
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-5 offset-md-2">

		<div class="card">	 
			<div class="card-header" >
				Iniciar sesión
			</div>
			<div class="card-body">
				<h1 class="card-title">Iniciar sesión</h1>
				<form action="{{route('valida')}}" method = 'POST'>
					{{csrf_field()}}
					@if($errors->first('user')) 
						<i> {{ $errors->first('user') }} </i> 
						@endif	<br>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text">@</div>
						</div>
						<input type="" name="user" class="form-control" placeholder="Usuario">
					</div>	
						@if($errors->first('pasw')) 
						<i> {{ $errors->first('pasw') }} </i> 
						@endif	<br>			
					<input type="password" name="pasw" class="form-control mb-3" placeholder="Contraseña">
					
					<!-- <input type="submit" name="" class="btn btn-primary"> -->
					<input type = 'submit' value = 'Iniciar Sesion' class="btn btn-success">
				</form>
				@if (Session::has('error'))
    				<div>{{ Session::get('error') }}</div>
					<script>
					    alert("{{Session::get('error')}}");
					</script>
				@endif
			</div>
		</div>
	</div>
</div>
@stop