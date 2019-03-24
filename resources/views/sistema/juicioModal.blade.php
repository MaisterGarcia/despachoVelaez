@extends('templates.app')

@section("nav")
@include("templates.layouts.nav")
@stop 

@section("asside")
@include("templates.layouts.asside")
@stop 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script>
	$( function() {
		$( "#datepicker" ).datepicker();
	} );
</script>
@section("body")
<style>
.modal-content {
	width: 900px;
	margin-left: -150px;
	height: 700px;
}
</style>
<div class="col-xs-12 col-md-12">
	<div class="card">
		<div class="card-header">
			<h1><b>Juicio</b></h1>

		</div>
		<div class="card-body" style="font-size: 15px">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#juicio-crear">
				Agregar juicio
			</button>
		
		</div>
	</div>
	
</div>

@stop


@section("modals")
<div class="modal fade" id="juicio-crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Registrar Juicio</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12">
						<h3>Selecciona el tipo de Juicio a registrar</h3>
						<nav class="navbar">
							<!-- Example single danger button -->
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle navar btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Juicios
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item bg-secondary" href="#" onclick="toggleFormCrear(1)">Administrativo</a>
									<a class="dropdown-item bg-secondary" href="#" onclick="toggleFormCrear(2)">Fiscal</a>
									<a class="dropdown-item bg-secondary" href="#" onclick="toggleFormCrear(3)">Civil</a>
									<a class="dropdown-item bg-secondary" href="#" onclick="toggleFormCrear(4)">Mercantil</a>
									<a class="dropdown-item bg-secondary" href="#" onclick="toggleFormCrear(5)">Laboral</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item bg-secondary" href="#" onclick="toggleFormCrear(6)">Penal</a>
									<a class="dropdown-item bg-secondary" href="#" onclick="toggleFormCrear(7)">Amparo</a>
								</div>
							</div>
						</nav>
					</div>


					<!-- Form #1 -->
					{{-- /////////////// ADMINISTRATIVO /////////////--}}
					<div class="col-xs-12 col-12" rol="form-crear" id="form-crear-1" style="height: 200px;">
						<h3>Administrativo</h3>
						<form action="{{route('impresion')}}" method="POST">
							{{csrf_field()}}					
							<div class="container col-12">
								<div class="row justify-content-center">
									<div class="form-group col-5">
										<input type="text" name="num_juicio" id="num_juicio" placeholder="No. Juicio(Folio)" class="form-control">
										<br>
										<div class="field_wrapper">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">	
														<a href="javascript:void(0);" class="add_button" title="Add field">
															<img src="{{asset('archivo/add-icon.png')}}" width="30" height="30" />
														</a></span>
													</div>
													<input type="text" name="field_name[]" value="" class="form-control" placeholder="Cliente (Presione + para Apellidos)" aria-describedby="basic-addon1"><br>
												</div>	
											</div> <br>
											
										</div> 
										<div class="form-group col-5">
											<div class="field_wrapperPromo">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">
															<a href="javascript:void(0);" class="add_buttonPromo" title="Add field">
																<img src="{{asset('archivo/add-icon.png')}}" width="30" height="30" />
															</a></span>
														</div>
														<input type="text" name="field_namePromo[]" value="" class="form-control" placeholder="Promovente (Presione+para Apell.)"/> 
													</div>
												</div><br>
												<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
																	<img src="{{asset('archivo/calendar.png')}}" width="25" height="25" />
																</span>
														</div>
														<p><input type="text" id="datepicker" class="form-control" placeholder="Fecha Pres." style="float:left;width: 70%;"><p>
												</div><br>
											</div>
											
										</div>
										<center>
											<input type="submit" value="Guardar" class="btn btn-success col-2 " >
											<input type="reset" value="Cancelar" class="btn btn-warning col-2" >
										</center>

									</div>	
						</form>
					</div>
					{{-- /////////////////////////////////////////////////////////////////////////////////////////--}}
							<!-- FISCAL -->
							<div class="col-xs-12 col-md-12" rol="form-crear" id="form-crear-2" style="height: 200px; background: blue">
								<h3>Fiscal</h3>
								
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					</div>

				</div>
			</div>
		</div>
		@stop

		@section("footer")
		@include("templates.layouts.footer")
		@stop


		@section("script")
		
		@stop