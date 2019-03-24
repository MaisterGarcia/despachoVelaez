<aside>
	<div class="menu-container">
		<div class="menu">
			<div class="menu-container">
				<span class="title "><i class="icon-user-add-outline"></i>  {{Session::get('sesionname')}}</span>
			</div>
			<div class="menu-container">
				<span class="title "><i class="icon-th-menu"></i> Menú</span>
			</div>
			@if(Session::get('sesiontipo')=="admin")
			<div class="menu-container">
				<span class="title"><i class="icon-anchor"></i> |Abogados</span>
				<div class="menu hide">
					<a href="{{route('altaabogado')}}" class="option "><i class="icon-group-outline"></i>Alta Abogado</a>
					<a href="{{route('altaTipoAbogado')}}" class="option "><i class="icon-group-outline"></i>Alta Tipo Abogado</a>
					<a href="{{route('reporteTipoAbogados')}}" class="option "><i class="icon-eye"></i>Consulta Tipo Abogado</a>
					<a href="{{route('reporteabogado')}}" class="option "><i class="icon-eye"></i>Abogados</a>
				</div>
			</div>
			@endif
			<div class="menu-container">
				<span class="title"><i class="icon-user-add-outline"></i> | Clientes</span>
				<div class="menu hide">
					<a href="{{route('archivoCliente')}}" class="option"><i class="icon-attachment"></i>Achivos del cliente</a>
					@if(Session::get('sesiontipo')=="admin")
					<a href="{{route('altaclientes')}}" class="option"><i class="icon-pen"></i>Alta cliente</a>
					<a href="{{route('reporteclientes')}}" class="option"><i class="icon-eye"></i>Consulta cliente</a>
					@endif
				</div>
			</div>
			@if(Session::get('sesiontipo')=="admin")
			<div class="menu-container">
				<span class="title"><i class="icon-anchor"></i>| Juicios</span>
				<div class="menu hide">
					<a href="{{route('altaTipoJuicio')}}" class="option"><i class="icon-bookmark"></i>Alta Tipo Juicio</a>
					<a href="{{route('reporteTipoJuicios')}}" class="option"><i class="icon-eye"></i>Consulta Tipo Juicio</a>
					<a href="{{route('altajuicio')}}" class="option"><i class="icon-anchor"></i>Alta Juicio</a>
					<a href="{{route('reportejuicio')}}" class="option"><i class="icon-eye"></i>Consulta Juicios</a>	
				</div>
			</div>
			@endif
			@if(Session::get('sesiontipo')=="admin")
			<div class="menu-container">
				<span class="title"><i class="icon-bookmark"></i>| Juzgados</span>
				<div class="menu hide">
					<a href="{{route('altaTipoJuzgado')}}" class="option"><i class="icon-bookmark"></i> Alta Tipo Juzgado</a>
					<a href="{{route('reporteTipoJuzgados')}}" class="option"><i class="icon-eye"></i> Reporte Tipo Juzgados</a>
					<a href="{{route('altajuzgados')}}" class="option"><i class="icon-bookmark"></i> Alta Juzgado</a>
					<a href="{{route('reportejuzgados')}}" class="option"><i class="icon-eye"></i> Consulta Juzgado</a>
					<!-- <a href="" class="option">Opcion 3</a> -->
				</div>
			</div>
			@endif
			@if(Session::get('sesiontipo')=="admin")
			<div class="menu-container">
				<span class="title"><i class="icon-pen"></i>| Tareas</span>
				<div class="menu hide">
					<a href="{{route('altaTarea')}}" class="option"><i class="icon-bookmark"></i> Alta Tarea</a>
					<a href="{{route('reporteTarea')}}" class="option"><i class="icon-eye"></i> Reporte Tareas</a>
					<!-- <a href="" class="option">Opcion 3</a> -->
				</div>
			</div>	
			@endif
			@if(Session::get('sesiontipo')=="admin")
			<div class="menu-container">
				<span class="title"><i class="icon-pen"></i>| Archivos por Juicio o &nbsp cliente</span>
				<div class="menu hide">
					<a href="{{route('archivosXCliente')}}" class="option"><i class="icon-bookmark"></i> Archivos</a>
				</div>
			</div>	
			@endif
			<a href="{{URL::action('accesoc@cerrarsesion')}}" class="option "><i class="icon-media-eject"></i>CERRAR SESIÓN</a>														
		</div>
	</div>
</aside>