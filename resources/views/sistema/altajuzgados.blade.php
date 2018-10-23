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

		
				<h1>Alta Juzgados</h1>

			
			<div align="center" class="row">
			<form role="form" action="" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('FolioJuzgado'))
		        <i> {{ $errors->first('FolioJuzgado') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="FolioJuzgado">Folio:</label>
				<input type="text" placeholder="Folio..." name="FolioJuzgado" value="{{$FolioJuzgados}}" readonly='readonly'><br>
				</div>

				@if($errors->first('Pais'))
		        <i> {{ $errors->first('Pais') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="Pais">Pais:</label>
				<input type="text" placeholder="Pais..." name="Pais" value="{{old('Pais')}}"><br>
				</div>

				@if($errors->first('No_Juzgado'))
		        <i> {{ $errors->first('No_Juzgado') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="No_Juzgado">Juzgado:</label>
				   <input type="text" placeholder="Juzgado..." name="No_Juzgado" value="{{old('No_Juzgado')}}"><br>
				</div>

				
				Selecciona estado<select name="id_TipoJuzgado">
				@foreach($tipo_juzgados as $tipjuz)
				<option value= '{{$tipjuz->id_TipoJuzgado}}'> {{$tipjuz->nombre}} 
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