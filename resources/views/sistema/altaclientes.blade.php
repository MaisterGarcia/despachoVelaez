@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body") 
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				Clientes
			</div>
			<div class="card-body">
				<h3 class="card-title">Alta Clientes</h3>
				<form role="form" action="{{route('guardaclientes')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
					{{csrf_field()}}
					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								@if($errors->first('id_cte'))
								<i> {{ $errors->first('id_cte') }} </i>
								@endif
								Folio:
								<input type="text" placeholder="Folio..." name="id_cte" value="{{$id_ctes}}" readonly='readonly' class="form-control">
							</div>
							<div class="form-group col-6">
								@if($errors->first('NomCliente'))
								<i> {{ $errors->first('NomCliente') }} </i>
								@endif 
								Nombre:
								<input type="text" placeholder="Nombre..." name="NomCliente" value="{{old('NomCliente')}}" class="form-control">
							</div>
							<div class="form-group col-6">
							@if($errors->first('AppCliente'))
							<i> {{ $errors->first('AppCliente') }} </i>
							@endif
								Apellido Paterno:
								<input type="text" placeholder="Apellido Paterno..." name="AppCliente" value="{{old('AppCliente')}}" class="form-control">
							</div>
							<div class="form-group col-6"> 
							@if($errors->first('ApmCliente'))
							<i> {{ $errors->first('ApmCliente') }} </i>
							@endif
								Apellido Materno:
								<input type="text" placeholder="Apellido Materno.." name="ApmCliente" value="{{old('ApmCliente')}}" class="form-control">
							</div>
							<div class="form-group col-6">
							@if($errors->first('edad'))
							<i> {{ $errors->first('edad') }} </i>
							@endif
								Edad :
								<input type="text" placeholder=" Edad..." name="edad" value="{{old('edad')}}" class="form-control">
							</div>
							<div class="form-group col-6">
								Sexo:<br>
								<label class="radio-inline">
									<input type="radio" name="sexo" value="H" checked>Hombre
								</label>
								<label class="radio-inline">
									<input type="radio" name="sexo" value="M">Mujer
								</label> 
							</div>
							<div class="form-group col-6">
							@if($errors->first('email'))
							<i> {{ $errors->first('email') }} </i>
							@endif
								Correo:
								<input type="text" placeholder="Correo.." name="email" value="{{old('email')}}" class="form-control"><br>
							</div>
							<div class="form-group col-6">
							@if($errors->first('telefono'))
							<i> {{ $errors->first('telefono') }} </i>
							@endif
								Telefono:
								<input type="text" placeholder="Telefono.." name="telefono" value="{{old('telefono')}}" class="form-control"><br>
							</div>
							<div class="form-group col-6">
							@if($errors->first('EstadoCivilCte'))
							<i> {{ $errors->first('EstadoCivilCte') }} </i>
							@endif
								Estado Civil:
								<input type="text" placeholder="Estado EstadoCivil.." name="EstadoCivilCte" value="{{old('EstadoCivilCte')}}" class="form-control"><br>
							</div>

							<div class="form-group col-6">
								Selecciona estado:
								<select name="id_est" class="form-control">
									@foreach($estados as $cr)
									<option value= '{{$cr->id_est}}'> {{$cr->NomEstado}} 
									</option>	
									@endforeach
								</select>
							</div>
							<div class="form-group col-6">
								Selecciona Municipio:
								<select name="id_mun" class="form-control">
									@foreach($municipios as $mun)
									<option value= '{{$mun->id_mun}}'>{{$mun->NomMunicipio}} 
									</option>	
									@endforeach
								</select>
							</div>
							<div class="form-group col-6">
								Selecciona Abogado:
								<select name="num_folio" class="form-control">
									@foreach($abogados as $tipabo)
									<option value= '{{$tipabo->num_folio}}'>{{$tipabo->NomAbogado}} 
									</option>	
									@endforeach
								</select>
							</div>
							<div class="form-group col-6">
								<label for="num_folio">Selecciona Tipo Archivo: </label>
								<select name="id_TipoArchivo" class="form-control">
									@foreach($tipo_archivos as $tiparch)
									<option value= '{{$tiparch->id_TipoArchivo}}'>{{$tiparch->NomArchivo}} 
									</option>	
									@endforeach
								</select>
							</div>
						</div>
						<input type="submit" value="Guardar" class="btn btn-success col-2">
						<input type="submit" value="Cancelar" class="btn btn-warning col-2">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop

@section("footer")
@include("templates.layouts.footer")
@stop 