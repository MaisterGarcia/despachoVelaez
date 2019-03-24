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
		<div class="card">
			<div class="card-header">
				Clientes
			</div>
			<div class="card-body">
				<h3 class="card-title">Modifica Cliente</h3>
				<form role="form" action="{{route('guardaedicioncliente')}}" method="POST" class="text-center row" enctype="multipart/form-data"> 
					{{csrf_field()}}
					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								@if($errors->first('id_cte'))
								<i> {{ $errors->first('id_cte') }} </i>
								@endif
								Folio:<input type="text" placeholder="Folio... Solo letras y numeros sin espacios" name="id_cte" value="{{$clientes->id_cte}}" class="form-control">
							</div>

							<div class="form-group col-6">
								@if($errors->first('NomCliente'))
								<i> {{ $errors->first('NomCliente') }} </i>
								@endif
								Nombre:<input type="text" placeholder="Nombre..." name="NomCliente" value="{{$clientes->NomCliente}}" class="form-control">
							</div>
							<div class="form-group col-6">
								@if($errors->first('AppCliente'))
								<i> {{ $errors->first('AppCliente') }} </i>
								@endif 
								Paterno:<input type="text" placeholder="Apellido Paterno..." name="AppCliente" value="{{$clientes->AppCliente}}" class="form-control">
							</div>
							<div class="form-group col-6">
								@if($errors->first('ApmCliente'))
								<i> {{ $errors->first('ApmCliente') }} </i>
								@endif 
								Materno:
								<input type="text" placeholder="Apellido Materno.." name="ApmCliente" value="{{$clientes->ApmCliente}}" class="form-control">
							</div>
							<div class="form-group col-6">
								@if($errors->first('edad'))
								<i> {{ $errors->first('edad') }} </i>
								@endif
								Edad :
								<input type="text" placeholder=" Edad..." name="edad" value="{{$clientes->edad}}" class="form-control">
							</div>
							<!-- *************SEXO************** -->
							<div class="form-group col-6">
								Sexo:<br>
								@if($clientes->sexo=='M')
								<label class="radio-inline">
									<input type="radio" name="sexo" value="M"  checked="">Mujer
								</label>
								@else
								<label class="radio-inline">
									<input type="radio" name="sexo" value="M" >Mujer
								</label>
								@endif 
								@if($clientes->sexo=='H')
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
								<input type="text" placeholder="Correo.." name="email" value="{{$clientes->email}}" class="form-control">
							</div>
							<div class="form-group col-6">
								@if($errors->first('Telefono'))
								<i> {{ $errors->first('Telefono') }} </i>
								@endif 
								Telefono:
								<input type="text" placeholder="Telefono..(10 dígitos)" name="Telefono" value="{{$clientes->Telefono}}" class="form-control">
							</div>
							<div class="form-group col-6">
								@if($errors->first('EstadoCivilCte'))
								<i> {{ $errors->first('EstadoCivilCte') }} </i>
								@endif 
								Estado Civil:
								<input type="text" placeholder="Estado Estado Civil..(Soltero o Casado)" name="EstadoCivilCte" value="{{$clientes->EstadoCivilCte}}" class="form-control">
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
								<label for="id_mun">Selecciona Municipio: </label>
								<select name="id_mun" class="form-control">
									<option value='{{$id_mun}}'>{{$municipio}}</option>
									@foreach($todas2 as $mun)
									<option value= '{{$mun->id_mun}}'>{{$mun->NomMunicipio}} 
									</option>	
									@endforeach
								</select>
							</div>

							<div class="form-group col-6">
								<label for="num_folio">Selecciona Abogado: </label>
								<select name="num_folio" class="form-control">
									<option value='{{$num_folio}}'>{{$abogado}}</option>
									@foreach($todas3 as $abo)
									<option value= '{{$abo->num_folio}}'>{{$abo->NomAbogado}} 
									</option>	
									@endforeach
								</select>
							</div>

							<div class="form-group col-6">
								<label for="id_TipoArchivo">Selecciona Tipo Archivo: </label>
								<select name="id_TipoArchivo" class="form-control">
									<option value='{{$id_TipoArchivo}}'>{{$tipoarchivo}}</option>
									@foreach($todas4 as $tiparch)
									<option value= '{{$tiparch->id_TipoArchivo}}'>{{$tiparch->NomArchivo}} 
									</option>	
									@endforeach
								</select>
							</div>
						</div>
						<input type="submit" value="Guardar" class="btn btn-success col-2" >
						<input type="submit" value="Cancelar" class="btn btn-warning col-2" >
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