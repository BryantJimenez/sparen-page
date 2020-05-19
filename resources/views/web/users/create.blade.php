@extends('layouts.web')

@section('title', 'Registro de Usuarios')

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/dropify/css/dropify.min.css') }}">
@endsection


@section('content')

<div class="bradcam_area breadcam_bg_5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Registro de Usuarios</h3>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">

						<h6 class="card-subtitle">Campos obligatorios (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('usuario.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Nombre<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" value="{{ old('name') }}" id="name" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Apellido<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="lastname" required placeholder="Introduzca un apellido" value="{{ old('lastname') }}" id="lastname" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">DNI (Opcional)</label>
									<input class="form-control" type="text" name="dni" placeholder="Introduzca su DNI" value="{{ old('dni') }}" id="dni" minlength="5" maxlength="15">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Correo Electrónico<b class="text-danger">*</b></label>
									<input class="form-control" type="email" name="email" required placeholder="Introduzca un correo electrónico" value="{{ old('email') }}" minlength="5" maxlength="191">
								</div>


								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Dirección<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="address" required placeholder="Introduzca su dirección exacta" value="{{ old('address') }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Teléfono (Opcional)</label>
									<input class="form-control" type="text" name="phone" placeholder="Introduzca un teléfono" value="{{ old('phone') }}" id="phone" minlength="5" maxlength="15">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Contraseña<b class="text-danger">*</b></label>
									<input class="form-control" type="password" name="password" required placeholder="********" id="password" minlength="8" maxlength="40">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Confirmar Contraseña<b class="text-danger">*</b></label>
									<input class="form-control" type="password" required name="password_confirmation" required placeholder="********" minlength="8" maxlength="40">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Foto (Opcional)</label>
									<input type="file" name="photo" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
								</div> 

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="user">Guardar</button>

									</div>
								</div>

							</div>
						</form>
					</div>
				</div>
				</div
			</div>
		</div>
	</section>








	@endsection


	@section('script')

	<script src="{{ asset('/web/vendors/dropify/js/dropify.min.js') }}"></script>
	<script type="text/javascript">



	</script>

	@endsection