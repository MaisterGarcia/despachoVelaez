@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 

@section("body")
<div class="row">
	<div class="col-xs-12 col-md-12">
		<div class="card">
			<div class="card-header">
				Juzgados
			</div>
			<div class="card-body">
				<div align="center">
					<h3 class="card-title">Alta Juzgado</h3>
					<div align="center">
						<form role="form" action="{{route('guardajuzgados')}}" method="POST" class="text-center" enctype="multipart/form-data" class="form-control"> 
							{{csrf_field()}}
							<div class="container col-12">
								<div class="row">
									<div class="form-group col-6">
										@if($errors->first('FolioJuzgado'))
										<i> {{ $errors->first('FolioJuzgado') }} </i>
										@endif 
										Folio:
										<input type="text" placeholder="Folio..." name="FolioJuzgado" class="form-control"><br>
									</div>
									<div class="form-group col-6">
										@if($errors->first('Pais'))
										<i> {{ $errors->first('Pais') }} </i>
										@endif 
										Pais:
										<input type="text" placeholder="Pais..." name="Pais" value="{{old('Pais')}}" class="form-control"><br>
									</div>
									<div class="form-group col-6">
										@if($errors->first('No_Juzgado'))
										<i> {{ $errors->first('No_Juzgado') }} </i>
										@endif									
										Numero de Juzgado:
										<input type="text" placeholder="Juzgado..." name="No_Juzgado" value="{{old('No_Juzgado')}}" class="form-control"><br>
									</div>
									<div class="form-group col-6">
										@if($errors->first('Localizacion'))
										<i> {{ $errors->first('Localizacion') }} </i>
										@endif
										
										Juzgado:
										<input type="text" placeholder="Juzgado..." name="Localizacion" value="{{old('Localizacion')}}" class="form-control"><br>
									</div>
									<div class="form-group col-6">
										Selecciona estado:
										<select name="id_TipoJuzgado" class="form-control">
											@foreach($tipo_juzgados as $tipjuz)
											<option value= '{{$tipjuz->id_TipoJuzgado}}'> {{$tipjuz->TipoJuzgado}} 
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
	</div>
	@stop

	@section("footer")
	@include("templates.layouts.footer")
	@stop 