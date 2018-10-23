<!DOCTYPE html>
<html>
<body>
		<head>
			<title>Practica 14/09/2018</title>
		</head>

		<style type="text/css">

		form {
	    	width: 400px;
	    	height: 
	    	font: normal bold 12px;
		}

		form label {
	    	display: inline-block;
	    	width: 100px;
		}

		form input {
	    	display: inline-block;
	   	 	width: 150px;
	    	margin-bottom: 10px;
		}

		</style>  

		
				<h1>Alta Abogado</h1>

			
			<div align="center" class="row">
			<form role="form" action="{{route('guardaabogado')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('num_folio'))
		        <i> {{ $errors->first('num_folio') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="num_folio">Folio:</label>
				<input type="text" placeholder="Folio..." name="num_folio" value="{{$num_folios}}" readonly='readonly'><br>
				</div>

				@if($errors->first('NomAbogado'))
		        <i> {{ $errors->first('NomAbogado') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="NomAbogado">Nombre:</label>
				<input type="text" placeholder="Nombre..." name="NomAbogado" value="{{old('NomAbogado')}}"><br>
				</div>

				@if($errors->first('AppAbogado'))
		        <i> {{ $errors->first('AppAbogado') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="AppAbogado">Paterno:</label>
				   <input type="text" placeholder="Apellido Paterno..." name="AppAbogado" value="{{old('AppAbogado')}}"><br>
				</div>

				@if($errors->first('ApmAbogado'))
		        <i> {{ $errors->first('ApmAbogado') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="ApmAbogado">Materno:</label>
				<input type="text" placeholder="Apellido Materno.." name="ApmAbogado" value="{{old('ApmAbogado')}}"><br>
				</div>

				@if($errors->first('edad'))
		        <i> {{ $errors->first('edad') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="edad">Edad :</label>
				 <input type="text" placeholder=" Edad..." name="edad" value="{{old('edad')}}"><br><br>
				</div>

				@if($errors->first('sexo'))
		        <i> {{ $errors->first('sexo') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="sexo">Sexo:</label>
				<input type="text" placeholder="Sexo.." name="sexo" value="{{old('sexo')}}"><br>
				</div>

				@if($errors->first('email'))
		        <i> {{ $errors->first('email') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="email">Correo:</label>
				<input type="text" placeholder="Correo.." name="email" value="{{old('email')}}"><br>
				</div>

				@if($errors->first('telefono'))
		        <i> {{ $errors->first('telefono') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="telefono">Telefono:</label>
				<input type="text" placeholder="Telefono.." name="telefono" value="{{old('telefono')}}"><br>
				</div>

				@if($errors->first('EstadoCivil'))
		        <i> {{ $errors->first('EstadoCivil') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="EstadoCivil">Estado EstadoCivil:</label>
				<input type="text" placeholder="Estado EstadoCivil.." name="EstadoCivil" value="{{old('EstadoCivil')}}"><br>
				</div>



				Selecciona estado<select name="id_est">
				@foreach($estados as $est)
				<option value= '{{$est->id_est}}'>{{$est->NomEstado}} 
				</option>	
				@endforeach
				</select>
				<br>

				Selecciona Municipio<select name="id_mun">
				@foreach($municipios as $mun)
				<option value= '{{$mun->id_mun}}'>{{$mun->NomMunicipio}} 
				</option>	
				@endforeach
				</select>
				<br>

				Selecciona 	Tipo Abogado<select name="idTipoAbogado">
				@foreach($tipo_abogados as $tipabo)
				<option value= '{{$tipabo->idTipoAbogado}}'>{{$tipabo->nombre}} 
				</option>	
				@endforeach
				</select>
				<br>

				
		        

		
				

				<!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<button value="Guardar"> Guardar </button>
				<button value="Cancelar"> Cancelar </button>

			</form>
			</div>
</html>