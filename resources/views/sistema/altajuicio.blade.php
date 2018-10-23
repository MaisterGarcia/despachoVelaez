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

		
				<h1>Alta Juicio</h1>

			
			<div align="center" class="row">
			<form role="form" action="" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('num_juicio'))
		        <i> {{ $errors->first('num_juicio') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="num_juicio">Folio:</label>
				<input type="text" placeholder="Folio..." name="num_juicio" value="{{$num_juicios}}" readonly='readonly'><br>
				</div>

				@if($errors->first('NomDemandante'))
		        <i> {{ $errors->first('NomDemandante') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="NomDemandante">Nombre:</label>
				<input type="text" placeholder="Nombre..." name="NomDemandante" value="{{old('NomDemandante')}}"><br>
				</div>

				@if($errors->first('id_TipoJuicio'))
		        <i> {{ $errors->first('id_TipoJuicio') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_TipoJuicio">Edad:</label>
				   <input type="text" placeholder="Apellido Paterno..." name="id_TipoJuicio" value="{{old('id_TipoJuicio')}}"><br>
				</div>

				@if($errors->first('FechaDemanda'))
		        <i> {{ $errors->first('FechaDemanda') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="FechaDemanda">Correo:</label>
				<input type="text" placeholder="Apellido Materno.." name="FechaDemanda" value="{{old('FechaDemanda')}}"><br>
				</div>

				@if($errors->first('FechaAuditoria'))
		        <i> {{ $errors->first('FechaAuditoria') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="FechaAuditoria">Edad :</label>
				 <input type="text" placeholder=" Edad..." name="FechaAuditoria" value="{{old('FechaAuditoria')}}"><br><br>
				</div>

				Selecciona estado<select name="id_cte">
				@foreach($estados as $cli)
				<option value= '{{$cli->id_cte}}'> {{$cli->id_cte}} 
				</option>	
				@endforeach
				</select>
				<br>

				Selecciona estado<select name="num_folio">
				@foreach($estados as $numfol)
				<option value= '{{$numfol->num_folio}}'> {{$numfol->num_folio}} 
				</option>	
				@endforeach
				</select>
				<br>

				Selecciona estado<select name="id_Archivo">
				@foreach($estados as $archi)
				<option value= '{{$archi->id_Archivo}}'> {{$archi->NomEstado}} 
				</option>	
				@endforeach
				</select>
				<br>

				Selecciona estado<select name="FolioJuzgado">
				@foreach($estados as $foljuz)
				<option value= '{{$foljuz->FolioJuzgado}}'> {{$foljuz->NomEstado}} 
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