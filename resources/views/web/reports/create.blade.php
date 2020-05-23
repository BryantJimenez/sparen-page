@extends('layouts.web')

@section('title', __('messages.registration of report'))

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/dropify/css/dropify.min.css') }}">
@endsection

@section('content')

<div class="bradcam_area breadcam_bg_5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>@lang('messages.registration of report')</h3>
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
						@include('web.partials.errors')
						<h6 class="card-subtitle">@lang('messages.required fields') (<b class="text-danger">*</b>)</h6>
						<form  method="POST" action="{{ route('informe.store', ['lang' => $lang]) }}" class="form" enctype="multipart/form-data" id="formReport">
							@csrf
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.title spanish')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title_spanish" required placeholder="Introduzca un nombre" value="{{ old('title_spanish') }}" id="name" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.title english')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title_english" required placeholder="Enter the name" value="{{ old('title_english') }}" id="name" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.description spanish')<b class="text-danger">*</b></label>
									<input class="form-control" type="text"  name="description_spanish" required placeholder="Introduzca su dirección exacta" value="{{ old('description_spanish') }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.description english')<b class="text-danger">*</b></label>
									<input class="form-control" type="text"  name="description_english" required placeholder="Enter the Description" value="{{ old('description_english') }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.archive spanish')<b class="text-danger">*</b></label>
									<input type="file" name="pdf_spanish" required accept="pdf/*" id="input-file-now" class="dropify" data-allowed-file-extensions="pdf" />
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.archive english')<b class="text-danger">*</b></label>
									<input type="file" name="pdf_english" required accept="pdf/*" id="input-file-now" class="dropifys" data-allowed-file-extensions="pdf" />
								</div>

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="report">@lang('messages.save')</button>
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
<script src="{{ asset('/web/vendors/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/web/vendors/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/web/vendors/validate/messages_es.js') }}"></script>
<script src="{{ asset('/web/js/validate.js') }}"></script>
@endsection
