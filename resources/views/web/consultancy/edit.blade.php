@extends('layouts.web')

@section('title', __('messages.edit consultancies'))

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/lobibox/Lobibox.min.css') }}">
<link rel="stylesheet" href="{{ asset('/web/vendors/dropify/css/dropify.min.css') }}">
@endsection


@section('content')

<div class="bradcam_area breadcam_bg_5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>@lang('messages.edit consultancies')</h3>
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
						@include('web.partials.errors')
						<h3 class="text-heading">@lang('messages.edit consultancies')</h3>

						<h6 class="card-subtitle">@lang('messages.required fields') (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('consultoria.update', ['lang' => $lang]) }}" enctype="multipart/form-data" id="formConsultancy">
							@method('PUT')
							@csrf
							<div class="row">

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.first title spanish')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title1_spanish" required value="{{ $consultancy->title1_spanish }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.first title english')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title1_english" required value="{{ $consultancy->title1_english }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.first content spanish')<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content1_spanish" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $consultancy->content1_spanish }}</textarea> 
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.first content english')<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content1_english" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $consultancy->content1_english }}</textarea> 
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.second title spanish')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title2_spanish" required value="{{ $consultancy->title2_spanish }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.second title english')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title2_english" required value="{{ $consultancy->title2_english }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.second content spanish')<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content2_spanish" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $consultancy->content2_spanish }}</textarea> 
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.second content english')<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content2_english" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $consultancy->content2_english }}</textarea> 
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.third title spanish')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title3_spanish" required value="{{ $consultancy->title3_spanish }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.third title english')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="title3_english" required value="{{ $consultancy->title3_english }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.third content spanish')<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content3_spanish" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $consultancy->content3_spanish }}</textarea> 
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.third content english')<b class="text-danger">*</b></label>
									<textarea class="form-control"name="content3_english" required  value="" id="paragraph1_spanish" minlength="2" maxlength="191">{{ $consultancy->content3_english }}</textarea> 
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.image')<b class="text-danger">*</b></label>
									<input type="file" name="picture" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" data-default-file="{{ '/web/images/consultancy/'.$consultancy->picture }}" />
								</div> 

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="consultancy">@lang('messages.save')</button>
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

@endsection

@section('script')
<script src="{{ asset('/web/vendors/lobibox/Lobibox.js') }}"></script>
<script src="{{ asset('/web/vendors/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('/web/vendors/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/web/vendors/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/web/vendors/validate/messages_es.js') }}"></script>
<script src="{{ asset('/web/js/validate.js') }}"></script>
@endsection
