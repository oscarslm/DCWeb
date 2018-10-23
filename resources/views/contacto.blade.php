@extends('layouts.master')

@section('title', 'Contacto')

@push('css')
@endpush

@section('page-title')
	<section id="page-title">
		<div class="parallax-window" data-parallax="scroll" data-speed="0.5" data-position-x="center" data-position-y="center" data-image-src="{{ asset('img/coding-html5.jpg') }}"></div>
	</section>
@endsection

@section('content')
	<div class="jumbotron">
		<div class="container">
			<form id="contact" class="needs-validation" method="POST" novalidate>
				<div class="form-row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Nombre</label>
							<input class="form-control" type="text" required>
							<div class="valid-feedback">¡Perfecto!</div>
							<div class="invalid-feedback">Por favor, captura un nombre.</div>
						</div><!--.form-group-->
					</div><!--.col-sm-6-->
					<div class="col-sm-6">
						<div class="form-group">
							<label>Apellido</label>
							<input class="form-control" type="text" required>
							<div class="valid-feedback">¡Perfecto!</div>
							<div class="invalid-feedback">Por favor, captura un nombre.</div>
						</div><!--.form-group-->
					</div><!--.col-sm-6-->
					<div class="col-sm-6">
						<div class="form-group">
							<label>Correo electrónico</label>
							<input class="form-control" type="email" required>
							<div class="valid-feedback">¡Perfecto!</div>
							<div class="invalid-feedback">Por favor, captura un nombre.</div>
						</div><!--.form-group-->
					</div><!--.col-sm-6-->
					<div class="col-sm-6">
						<div class="form-group">
							<label>Teléfono</label>
							<input class="form-control" type="tel" required>
							<div class="valid-feedback">¡Perfecto!</div>
							<div class="invalid-feedback">Por favor, captura un nombre.</div>
						</div><!--.form-group-->
					</div><!--.col-sm-6-->
					<div class="col">
						<button class="btn btn-primary" type="submit">Submit form</button>
					</div><!--.col-->
				</div><!--.form-row-->
			</form>
		</div><!--.container-->
	</div><!--.jumbotron-->
@endsection

@push('js')
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict';
			  	window.addEventListener('load', function() {
			    // Fetch all the forms we want to apply custom Bootstrap validation styles to
			    var forms = document.getElementsByClassName('needs-validation');
			    // Loop over them and prevent submission
			    var validation = Array.prototype.filter.call(forms, function(form) {
			    	form.addEventListener('submit', function(event) {
				        if (form.checkValidity() === false) {
				        	event.preventDefault();
				        	event.stopPropagation();
				        }
			        	form.classList.add('was-validated');
			    	}, false);
			    });
		  	}, false);
		})();
	</script>
@endpush
