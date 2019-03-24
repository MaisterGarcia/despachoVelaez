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
<div class="row">
	<div class="col-12">
		<div class="card" style="background: black color-font:#ffffff">
			<div class="card-header">
				Abogados
			</div>
			<div class="card-body">
				<h3 class="card-title">Alta Abogado</h3>
				<form action="{{ route('guardaedicionabogado') }}" method="post" class="text-center row" enctype="multipart/form-data"> 
					{{csrf_field()}}
					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								@if($errors->first('num_folio'))
								<i> {{ $errors->first('num_folio') }} </i>  
								@endif
								Folio:<input type="text" placeholder="Folio... Solo letras y numeros sin espacios" name="num_folio" value="{{$abogados->num_folio}}" class="form-control" readonly="">
							</div>
							<div class="form-group col-6">
								@if($errors->first('NomAbogado'))
								<i> {{ $errors->first('NomAbogado') }} </i>
								@endif
								Nombre:<input type="text" placeholder="Nombre..." name="NomAbogado" value="{{$abogados->NomAbogado}}" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								@if($errors->first('AppAbogado'))
								<i> {{ $errors->first('AppAbogado') }} </i>
								@endif 
								Paterno:<input type="text" placeholder="Apellido Paterno..." name="AppAbogado" value="{{$abogados->AppAbogado}}" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								@if($errors->first('ApmAbogado'))
								<i> {{ $errors->first('ApmAbogado') }} </i>
								@endif 
								Materno:
								<input type="text" placeholder="Apellido Materno.." name="ApmAbogado" value="{{$abogados->ApmAbogado}}" class="form-control">
							</div>
							<div class="form-group col-6">
								@if($errors->first('edad'))
								<i> {{ $errors->first('edad') }} </i>
								@endif
								<label for="edad">Edad :</label>
								<input type="text" placeholder=" Edad..." name="edad" value="{{$abogados->edad}}" class="form-control">
							</div>
							<!--*********SEXO*******-->
							<div class="form-group col-6">
								Sexo:<br>
								@if($abogados->sexo=='M' or $abogados->sexo=='m')
								<label class="radio-inline">
									<input type="radio" name="sexo" value="M"  checked="">Mujer
								</label>
								@else
								<label class="radio-inline">
									<input type="radio" name="sexo" value="M" >Mujer
								</label>
								@endif 
								@if($abogados->sexo=='H' or $abogados->sexo=='h')
								<label class="radio-inline">
									<input type="radio" name="sexo" value="H"  checked="">Hombre
								</label>
								@else
								<label class="radio-inline">
									<input type="radio" name="sexo" value="H" >Hombre
								</label>
								@endif 	
							</div>
							<div class="form-group col-6"> 
								@if($errors->first('email'))
								<i> {{ $errors->first('email') }} </i>
								@endif
								Correo:
								<input type="text" placeholder="Correo.." name="email" value="{{$abogados->email}}" class="form-control">
							</div>
							<div class="form-group col-6"> 
								@if($errors->first('telefono'))
								<i> {{ $errors->first('telefono') }} </i>
								@endif 
								Telefono:
								<input type="text" placeholder="Telefono..(10 dígitos)" name="telefono" value="{{$abogados->telefono}}" class="form-control">
							</div>
							<div class="form-group col-6"> 
								@if($errors->first('EstadoCivil'))
								<i> {{ $errors->first('EstadoCivil') }} </i>
								@endif 
								Estado Civil:
								<input type="text" placeholder="Estado EstadoCivil..(Soltero o Casado)" name="EstadoCivil" value="{{$abogados->EstadoCivil}}" class="form-control">
							</div>
							<div class="form-group col-6">
								Selecciona estado:
								<select name="id_est" class="form-control" width="30">
									<option value='{{$id_est}}'>{{$estado}}</option>
									@foreach($todas1 as $est)
									<option value= '{{$est->id_est}}'>{{$est->NomEstado}} 
									</option>	
									@endforeach
								</select>
							</div>
							<div class="form-group col-6">
								Selecciona Municipio:
								<select name="id_mun" class="form-control">
									<option value='{{$id_mun}}'>{{$municipio}}</option>
									@foreach($todas2 as $mun)
									<option value= '{{$mun->id_mun}}'>{{$mun->NomMunicipio}} 
									</option>	
									@endforeach
								</select>
							</div>
							<div class="form-group col-6">
								Selecciona 	Tipo Abogado:
								<select name="IdTipoAbogado" class="form-control">
									<option value='{{$IdTipoAbogado}}'>{{$tipoabogado}}</option>
									@foreach($todas3 as $tipabo)
									<option value= '{{$tipabo->IdTipoAbogado}}'>{{$tipabo->TipoAbogado}} 
									</option>	
									@endforeach
								</select>
							</div>
							<div class="form-group col-6">
								@if($errors->first('archivo'))
								<i> {{ $errors->first('archivo') }} </i>
								@endif 
								<img src=" {{asset('archivo/'.$abogados->Archivo)}}" height="140" width="140"> 
							</div>
							<div class="form-group col-6">
								Selecciona foto:<br><br><br> <input type="file" name= "archivo">
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
</div>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 