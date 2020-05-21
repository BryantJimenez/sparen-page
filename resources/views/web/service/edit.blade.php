@extends('layouts.web')

@section('title', 'Editar Servicios')

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/dropify/css/dropify.min.css') }}">
@endsection


@section('content')

<div class="bradcam_area breadcam_bg_5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Editar "Servicios"</h3>
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
						<form  method="POST" class="form" action="{{ route('servicio.update', ['id' => 1]) }}" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="row">


								<div class="col-6">
									<div class="form-group col-12">
										<label class="col-form-label">Imagen 1<b class="text-danger">*</b></label>
										<input type="file" name="picture1" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
									</div> 

								</div>

								<div class="col-6">

									<div class="form-group col-12">
										<label class="col-form-label">Título 1<b class="text-danger">*</b></label>
										<input type="text" class="form-control"name="title1_spanish" required value="{{ $service->title1_spanish }}" minlength="2" maxlength="191"> 
									</div>

									<div class="form-group col-12 ">
										<label class="col-form-label">Contenido 1<b class="text-danger">*</b></label>
										<textarea class="form-control"name="content1_spanish" required  value="" minlength="2" maxlength="191">{{ $service->content1_spanish }}</textarea>  
									</div>

								</div>

								<div class="col-6">
									<div class="form-group col-12">
										<label class="col-form-label">Imagen 2<b class="text-danger">*</b></label>
										<input type="file" name="picture2" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
									</div> 

								</div>

								<div class="col-6">

									<div class="form-group col-12">
										<label class="col-form-label">Título 2<b class="text-danger">*</b></label>
										<input type="text" class="form-control"name="title2_spanish" required value="{{ $service->title2_spanish }}" minlength="2" maxlength="191"> 
									</div>

									<div class="form-group col-12 ">
										<label class="col-form-label">Contenido 2<b class="text-danger">*</b></label>
										<textarea class="form-control"name="content2_spanish" required  value="" minlength="2" maxlength="191">{{ $service->content2_spanish }}</textarea>  
									</div>

								</div>

								<div class="col-6">
									<div class="form-group col-12">
										<label class="col-form-label">Imagen 3<b class="text-danger">*</b></label>
										<input type="file" name="picture3" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
									</div> 

								</div>

								<div class="col-6">

									<div class="form-group col-12">
										<label class="col-form-label">Título 3<b class="text-danger">*</b></label>
										<input type="text" class="form-control"name="title3_spanish" required value="{{ $service->title3_spanish }}" minlength="2" maxlength="191"> 
									</div>

									<div class="form-group col-12 ">
										<label class="col-form-label">Contenido 3<b class="text-danger">*</b></label>
										<textarea class="form-control"name="content3_spanish" required  value="" minlength="2" maxlength="191">{{ $service->content3_spanish }}</textarea>  
									</div>

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

						<h6 class="card-subtitle">Required fields (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('servicio.update', ['id' => 1]) }}" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="row">

								<div class="col-6">
									<div class="form-group col-12">
										<label class="col-form-label">Image 1<b class="text-danger">*</b></label>
										<input type="file" name="picture1" accept="image/*" id="input-file-now" class="dropifys" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
									</div> 

								</div>

								<div class="col-6">

									<div class="form-group col-12">
										<label class="col-form-label">Title 1<b class="text-danger">*</b></label>
										<input type="text" class="form-control"name="title1_english" required value="{{ $service->title1_english }}" minlength="2" maxlength="191"> 
									</div>

									<div class="form-group col-12 ">
										<label class="col-form-label">Content 1<b class="text-danger">*</b></label>
										<textarea class="form-control"name="content1_english" required  value="" minlength="2" maxlength="191">{{ $service->content1_english }}</textarea>  
									</div>

								</div>

								<div class="col-6">
									<div class="form-group col-12">
										<label class="col-form-label">Image 2<b class="text-danger">*</b></label>
										<input type="file" name="picture2" accept="image/*" id="input-file-now" class="dropifys" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
									</div> 

								</div>

								<div class="col-6">

									<div class="form-group col-12">
										<label class="col-form-label">Title 2<b class="text-danger">*</b></label>
										<input type="text" class="form-control"name="title2_english" required value="{{ $service->title2_english }}" minlength="2" maxlength="191"> 
									</div>

									<div class="form-group col-12 ">
										<label class="col-form-label">Content 2<b class="text-danger">*</b></label>
										<textarea class="form-control"name="content2_english" required  value="" minlength="2" maxlength="191">{{ $service->content2_english }}</textarea>  
									</div>

								</div>

								<div class="col-6">
									<div class="form-group col-12">
										<label class="col-form-label">Image 3<b class="text-danger">*</b></label>
										<input type="file" name="picture3" accept="image/*" id="input-file-now" class="dropifys" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
									</div> 

								</div>

								<div class="col-6">

									<div class="form-group col-12">
										<label class="col-form-label">Title 3<b class="text-danger">*</b></label>
										<input type="text" class="form-control"name="title3_english" required value="{{ $service->title3_english }}" minlength="2" maxlength="191"> 
									</div>

									<div class="form-group col-12 ">
										<label class="col-form-label">Content 3<b class="text-danger">*</b></label>
										<textarea class="form-control"name="content3_english" required  value="" minlength="2" maxlength="191">{{ $service->content3_english }}</textarea>  
									</div>

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