@extends('layouts.web')

@section('title', 'Editar Nosotros')

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/dropify/css/dropify.min.css') }}">
@endsection


@section('content')

<div class="bradcam_area breadcam_bg_5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Editar "Nosotros"</h3>
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
						<h3 class="text-heading">Editar "Nosotros en Español"</h3>

						<h6 class="card-subtitle">Campos obligatorios (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('sobre.update', ['id' => 1]) }}" enctype="multipart/form-data">
							@csrf
							<div class="row">

								<div class="form-group col-12">
									<label class="col-form-label">Párrafo 1<b class="text-danger">*</b></label>
									<textarea class="form-control"name="paragraph1_spanish" required placeholder="Introduzca el contenido del párrafo 1" value="{{ old('paragraph1_spanish') }}" id="paragraph1_spanish" minlength="2" maxlength="191"></textarea> 
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Párrafo 2<b class="text-danger">*</b></label>
									<textarea class="form-control" name="paragraph2_spanish" required placeholder="Introduzca el contenido del párrafo 2" value="{{ old('paragraph2_spanish') }}" minlength="5" maxlength="191"></textarea>
								</div>

								<div class="form-group col-lg-4 col-md-4 col-12">
									<label class="col-form-label">Check 1<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list1_spanish" required placeholder="Introduzca el conteido del primer check" value="{{ old('list1_spanish') }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-lg-4 col-md-4 col-12">
									<label class="col-form-label">Check 2<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list2_spanish" required placeholder="Introduzca el conteido del segundo check" value="{{ old('list2_spanish') }}" minlength="5" maxlength="191">
								</div>


								<div class="form-group col-lg-4 col-md-4 col-12">
									<label class="col-form-label">Check 3<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list3_spanish" required placeholder="Introduzca el conteido del tercer check" value="{{ old('list3_spanish') }}" minlength="5" maxlength="191">
								</div>


								<div class="form-group col-12">
									<label class="col-form-label">FImagen<b class="text-danger">*</b></label>
									<input type="file" name="picture" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
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
						<h3 class="text-heading">Edit "About in English"</h3>

						<h6 class="card-subtitle">Fields Obligatories (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('sobre.update', ['id' => 1]) }}" enctype="multipart/form-data">
							@csrf
							<div class="row">

								<div class="form-group col-12">
									<label class="col-form-label">Paragraph 1<b class="text-danger">*</b></label>
									<textarea class="form-control" name="paragraph1_english" required value="{{ old('paragraph1_english') }}" id="paragraph1_english" minlength="2" maxlength="191"></textarea>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Paragraph 2<b class="text-danger">*</b></label>
									<textarea class="form-control" name="paragraph2_english" required  value="{{ old('paragraph2_english') }}" minlength="5" maxlength="191"></textarea>
								</div>

								<div class="form-group col-lg-4 col-md-4 col-12">
									<label class="col-form-label">Check 1<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list1_english" required  value="{{ old('list1_english') }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-lg-4 col-md-4 col-12">
									<label class="col-form-label">Check 2<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list2_english" required value="{{ old('list2_english') }}" minlength="5" maxlength="191">
								</div>


								<div class="form-group col-lg-4 col-md-4 col-12">
									<label class="col-form-label">Check 3<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list3_english" required  value="{{ old('list3_english') }}" minlength="5" maxlength="191">
								</div>


								<div class="form-group col-12">
									<label class="col-form-label">Picture<b class="text-danger">*</b></label>
									<input type="file" name="picture" accept="image/*" id="input-file-now" class="dropifys" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
								</div> 

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="user">Save</button>

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