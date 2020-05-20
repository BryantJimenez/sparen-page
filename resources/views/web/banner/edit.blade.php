@extends('layouts.web')

@section('title', 'Editar Banner')

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/dropify/css/dropify.min.css') }}">
@endsection


@section('content')

<div class="bradcam_area breadcam_bg_5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Editar "Banner"</h3>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Formulario en Español --}}

<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h3 class="text-heading">Editar "Banner en Español"</h3>

						<h6 class="card-subtitle">Campos obligatorios (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('banner.update', ['id' => 1]) }}" enctype="multipart/form-data">
							@csrf
							<div class="row">

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Banner<b class="text-danger">*</b></label>
									<input type="file" name="picture1" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
								</div> 

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Contenido 1<b class="text-danger">*</b></label>
									<textarea class="form-control"name="banner1_spanish" required value="" minlength="2" maxlength="191"></textarea> 
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Banner 2<b class="text-danger">*</b></label>
									<input type="file" name="picture2" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
								</div> 

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Contenido 2<b class="text-danger">*</b></label>
									<textarea class="form-control"name="banner2_spanish" required  value="" minlength="2" maxlength="191"></textarea> 
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Banner 3<b class="text-danger">*</b></label>
									<input type="file" name="picture2" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
								</div> 

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Contenido 3<b class="text-danger">*</b></label>
									<textarea class="form-control"name="banner3_spanish" required  value="" minlength="2" maxlength="191"></textarea> 
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
			</div>
		</div>
	</div>
</section>

{{-- Formulario en Inglés --}}

<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h3 class="text-heading">Edit "Banner in English"</h3>

						<h6 class="card-subtitle">Fields Obligatories (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('sobre.update', ['id' => 1]) }}" enctype="multipart/form-data">
							@csrf
							<div class="row">

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Banner<b class="text-danger">*</b></label>
									<input type="file" name="picture1" accept="image/*" id="input-file-now" class="dropifys" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
								</div> 

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Content 1<b class="text-danger">*</b></label>
									<textarea class="form-control"name="banner1_english" required value="" minlength="2" maxlength="191"></textarea> 
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Banner 2<b class="text-danger">*</b></label>
									<input type="file" name="picture2" accept="image/*" id="input-file-now" class="dropifys" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
								</div> 

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Content 2<b class="text-danger">*</b></label>
									<textarea class="form-control"name="banner2_english" required  value="" minlength="2" maxlength="191"></textarea> 
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Banner 3<b class="text-danger">*</b></label>
									<input type="file" name="picture2" accept="image/*" id="input-file-now" class="dropifys" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
								</div> 

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Content 3<b class="text-danger">*</b></label>
									<textarea class="form-control"name="banner3_english" required  value="" minlength="2" maxlength="191"></textarea> 
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
			</div>
		</div>
	</div>
</section>

@endsection

@section('script')

<script src="{{ asset('/web/vendors/dropify/js/dropify.min.js') }}"></script>

@endsection