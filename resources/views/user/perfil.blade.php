@extends('layout')
@section('title', 'Perfil')

@section('content')

<section class="py-4">
	<div class="container">
	
		@if(false)
			<div class="row mt-3 mb-3 justify-content-center">
				<div class="col-md-8" style="margin-top: 5%; margin-bottom: 10%;">
					<h2>Todavia no tienes tu perfil creado, <a href="/perfil/crear">¡Créalo aquí!</a></h2>	
				</div>
			</div>
		@else
		@if(Session::has('message'))
		<div class="alert alert-success w-50">
			{{ Session::get('message') }}
		</div>
		@endif
			<div class="row mb-3">
				<div class="col-md-6 centrar-izq">
					<h2> Mi Perfil </h2>
				</div>
				<div class="col-md-6 centrar-der">
					<a class="btn btn-own" href="/perfil/editar">Editar Perfil</a>
				</div>
			</div>
		
			<div class="row">
				<div class="col-sm-4"><!--left col-->					
					<div class="centrar">
						<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar de usuario">
					</div> 
				 
				</div>
				<div class="col-sm-8">
					<div class="row mt-4 justify-content-center">
						<div class="col-md-6">
							<p><strong>Nombres: </strong>aaa</p>
							{{-- <p><strong>DNI: </strong>{{ $profesional->dni }}</p> --}}
							<p><strong>Direccion: </strong>bbbb</p>
							<p><strong>Email: </strong>cccc</p>
							<p><strong>Sitio Web: </strong>dddd</p>
						</div>
						<div class="col-md-6">							
							<p><strong>Apellido: </strong>eeee</p>				
							<p><strong>Localidad: </strong>ffff</p>
							<p><strong>Teléfono: </strong>gggg</p>
							<p><strong>Rubro: </strong>hhhhhh</p>					
						</div>
					</div>
				</div>
			</div>					
		@endif
	
	</div>
</section>
@endsection



