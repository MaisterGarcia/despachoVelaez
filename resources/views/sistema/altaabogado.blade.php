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
				Abogados
			</div>
			<div class="card-body">
				<h3 class="card-title">Alta Abogados</h3>
				<form role="form" action="{{route('guardaabogado')}}" method="POST" class="text-center row" enctype="multipart/form-data"> 
					{{csrf_field()}}
					<div class="container col-12">
						<div class="row">
							<div class="form-group col-6">
								@if($errors->first('num_folio'))
								<i> {{ $errors->first('num_folio') }} </i>
								@endif
								Folio:<input type="text" placeholder="Folio... Solo letras y numeros sin espacios" name="num_folio" value="{{old('num_folio')}}" class="form-control">
							</div>
							<div class="form-group col-6">
								@if($errors->first('NomAbogado'))
								<i> {{ $errors->first('NomAbogado') }} </i>
								@endif
								Nombre:<input type="text" placeholder="Nombre..." name="NomAbogado" value="{{old('NomAbogado')}}" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								@if($errors->first('AppAbogado'))
								<i> {{ $errors->first('AppAbogado') }} </i>
								@endif 
								Paterno:<input type="text" placeholder="Apellido Paterno..." name="AppAbogado" value="{{old('AppAbogado')}}" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								@if($errors->first('ApmAbogado'))
								<i> {{ $errors->first('ApmAbogado') }} </i>
								@endif 
								Materno:
								<input type="text" placeholder="Apellido Materno.." name="ApmAbogado" value="{{old('ApmAbogado')}}" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								@if($errors->first('edad'))
								<i> {{ $errors->first('edad') }} </i>
								@endif
								Edad :
								<input type="text" placeholder=" Edad..." name="edad" value="{{old('edad')}}" class="form-control"><br><br>
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
								<input type="text" placeholder="Telefono..(10 dígitos)" name="telefono" value="{{old('telefono')}}" class="form-control"><br>
							</div>
							<div class="form-group col-6">
								@if($errors->first('EstadoCivil'))
								<i> {{ $errors->first('EstadoCivil') }} </i>
								@endif 
								Estado Civil:
								<input type="text" placeholder="Estado EstadoCivil..(Soltero o Casado)" name="EstadoCivil" value="{{old('EstadoCivil')}}" class="form-control">
							</div>
							<div class="form-group col-6">
								Selecciona estado:
								<select name="id_est" class="form-control" width="30">
									@foreach($estados as $est)
									<option value= '{{$est->id_est}}'>{{$est->NomEstado}} 
									</option>	
									@endforeach
								</select>
							</div>
							<div class="form-group col-6">
								Selecciona municipio:
								<select name="id_mun" class="form-control" width="30">
									@foreach($municipios as $mun)
									<option value= '{{$mun->id_mun}}'>{{$mun->NomMunicipio}} 
									</option>	
									@endforeach
								</select>
							</div>
							<div class="form-group col-6">
								Selecciona 	Tipo Abogado:
								<select name="IdTipoAbogado" class="form-control">
									@foreach($tipoAb as $tipabo)
									<option value= '{{$tipabo->IdTipoAbogado}}'>{{$tipabo->TipoAbogado}} 
									</option>	
									@endforeach
								</select>
							</div>
							<div class="form-group col-6">
								@if($errors->first('archivo'))
								<i> {{ $errors->first('archivo') }} </i>
								@endif 
								Selecciona Imagen:<br>
								<input type="file" class="form-control-file" id="exampleFormControlFile1" name="archivo">
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
