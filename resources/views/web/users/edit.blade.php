@extends('layouts.web')

@section('title', 'Editar Usuarios')

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/dropify/css/dropify.min.css') }}">
@endsection


@section('content')

<div class="bradcam_area breadcam_bg_5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Editar "Usuarios"</h3>
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
						<form action="{{ route('usuario.update', ['slug' => $user->slug]) }}" method="POST" class="form" id="formUser" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="row">
								<div class="form-group col-lg-6 col-md-6 col-12">
									<img src="{{ '/web/images/users/'.$user->photo }}" class="img-fluid">
								</div>
								<div class="form-group col-lg-6 col-md-6 col-12">
									<div class="row">
										<div class="form-group col-lg-12 col-md-12 col-12">
											<label class="col-form-label">Nombre y Apellido</label>
											<input class="form-control" type="text" disabled value="{{ $user->name.' '.$user->lastname }}">
										</div>
										<div class="form-group col-lg-12 col-md-12 col-12">
											<label class="col-form-label">Correo Electrónico<b class="text-danger">*</b></label>
											<input class="form-control" type="text" name="email" value="{{ $user->email }}">
										</div>
										<div class="form-group col-lg-12 col-md-12 col-12">
											<label class="col-form-label">Teléfono<b class="text-danger">*</b></label>
											<input class="form-control" name="phone" type="text" value="{{ $user->phone }}">
										</div>
										<div class="form-group col-lg-12 col-md-12 col-12">
											<label class="col-form-label">DNI<b class="text-danger">*</b></label>
											<input class="form-control" name="dni" type="text" value="{{ $user->dni }}">
										</div>
										<div class="form-group col-lg-12 col-md-12 col-12">
											<label class="col-form-label">Dirección<b class="text-danger">*</b></label>
											<input class="form-control" name="address" type="text" value="{{ $user->address }}">
										</div>
									</div>
								</div>

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="user">Actualizar</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



@endsection

@section('script')

<script src="{{ asset('/web/vendors/dropify/js/dropify.min.js') }}"></script>

@endsection