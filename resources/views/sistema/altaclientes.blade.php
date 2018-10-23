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

		
				<h1>Alta Cliente</h1>

			
			<div align="center" class="row">
			<form role="form" action="" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_cte'))
		        <i> {{ $errors->first('id_cte') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_cte">Folio:</label>
				<input type="text" placeholder="Folio..." name="id_cte" value="{{$id_ctes}}" readonly='readonly'><br>
				</div>

				@if($errors->first('NomCliente'))
		        <i> {{ $errors->first('NomCliente') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="NomCliente">Nombre:</label>
				<input type="text" placeholder="Nombre..." name="NomCliente" value="{{old('NomCliente')}}"><br>
				</div>

				@if($errors->first('AppCliente'))
		        <i> {{ $errors->first('AppCliente') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="AppCliente">Edad:</label>
				   <input type="text" placeholder="Apellido Paterno..." name="AppCliente" value="{{old('AppCliente')}}"><br>
				</div>

				@if($errors->first('ApmCliente'))
		        <i> {{ $errors->first('ApmCliente') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="ApmCliente">Correo:</label>
				<input type="text" placeholder="Apellido Materno.." name="ApmCliente" value="{{old('ApmCliente')}}"><br>
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

				@if($errors->first('EstadoCivilCte'))
		        <i> {{ $errors->first('EstadoCivilCte') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="EstadoCivilCte">EstadoCivilCte:</label>
				<input type="text" placeholder="Estado EstadoCivil.." name="EstadoCivilCte" value="{{old('EstadoCivilCte')}}"><br>
				</div>

				Selecciona estado<select name="id_est">
				@foreach($estados as $cr)
				<option value= '{{$cr->id_est}}'> {{$cr->NomEstado}} 
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
				
				Selecciona 	Tipo Archivo<select name="id_TipoArchivo">
				@foreach($tipo_archivos as $tiparch)
				<option value= '{{$tiparch->id_TipoArchivo}}'>{{$tiparch->nombre}} 
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