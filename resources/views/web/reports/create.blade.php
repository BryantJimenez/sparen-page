@extends('layouts.web')

@section('title', 'Registro de Informes')

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/dropify/css/dropify.min.css') }}">
@endsection


@section('content')

<div class="bradcam_area breadcam_bg_5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Registro de Informe</h3>
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
						<form  method="POST" action="{{ route('informe.store') }}" class="form" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Título<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title_spanish" required placeholder="Introduzca un nombre" value="{{ old('title_spanish') }}" id="name" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Descripción<b class="text-danger">*</b></label>
									<input class="form-control" type="text"  name="description_spanish" required placeholder="Introduzca su dirección exacta" value="{{ old('description_spanish') }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Archivo<b class="text-danger">*</b></label>
									<input type="file" name="pdf_spanish" required accept="pdf/*" id="input-file-now" class="dropify" data-allowed-file-extensions="pdf" />
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

<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h6 class="card-subtitle">Required fields (<b class="text-danger">*</b>)</h6>
						<form  method="POST" action="{{ route('report.store') }}" class="form" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Title<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title_english" required placeholder="Enter the name" value="{{ old('title_english') }}" id="name" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">Description<b class="text-danger">*</b></label>
									<input class="form-control" type="text"  name="description_english" required placeholder="Enter the Description" value="{{ old('description_english') }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Archivo<b class="text-danger">*</b></label>
									<input type="file" name="pdf_english" required accept="pdf/*" id="input-file-now" class="dropifys" data-allowed-file-extensions="pdf" />
								</div> 

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="user">Send</button>
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