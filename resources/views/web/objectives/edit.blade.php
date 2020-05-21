@extends('layouts.web')

@section('title', 'Editar Objetivos')

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/dropify/css/dropify.min.css') }}">
@endsection


@section('content')

<div class="bradcam_area breadcam_bg_5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Editar "Objetivos"</h3>
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
						<h3 class="text-heading">Editar "Objetivos en Español"</h3>

						<h6 class="card-subtitle">Campos obligatorios (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('objetivo.update', ['id' => 1]) }}" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="row">

								<div class="form-group  col-6">
									<label class="col-form-label">Título 1<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title1_spanish" required value="{{ $objective->title1_spanish }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-6">
									<label class="col-form-label">Contenido 1<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content1_spanish" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $objective->content1_spanish }}</textarea> 
								</div>

								<div class="form-group  col-6">
									<label class="col-form-label">Título 2<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title2_spanish" required value="{{ $objective->title2_spanish }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-6">
									<label class="col-form-label">Contenido 2<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content2_spanish" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $objective->content2_spanish }}</textarea> 
								</div>

								<div class="form-group  col-6">
									<label class="col-form-label">Título 3<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title3_spanish" required value="{{ $objective->title3_spanish }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-6">
									<label class="col-form-label">Contenido 3<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content3_spanish" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $objective->content3_spanish }}</textarea> 
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Imagen<b class="text-danger">*</b></label>
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
						<h3 class="text-heading">Edit "Objectives in English"</h3>

						<h6 class="card-subtitle">Required fields (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('objetivo.update', ['id' => 1]) }}" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="row">

								<div class="form-group  col-6">
									<label class="col-form-label">Title 1<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title1_english" required value="{{ $objective->title1_english }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-6">
									<label class="col-form-label">Content 1<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content1_english" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $objective->content1_english }}</textarea> 
								</div>

								<div class="form-group  col-6">
									<label class="col-form-label">Title 2<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title2_english" required value="{{ $objective->title2_english }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-6">
									<label class="col-form-label">Content 2<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content2_english" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $objective->content2_english }}</textarea> 
								</div>

								<div class="form-group  col-6">
									<label class="col-form-label">Title 3<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title3_english" required value="{{ $objective->title3_english }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-6">
									<label class="col-form-label">Content 3<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content3_english" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $objective->content3_english }}</textarea> 
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