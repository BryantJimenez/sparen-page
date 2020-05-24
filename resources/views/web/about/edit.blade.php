@extends('layouts.web')
 
@section('title', __('messages.edit about'))

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
					<h3>@lang('messages.edit about')</h3>
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
						<h3 class="text-heading">@lang('messages.edit about')</h3>

						<h6 class="card-subtitle">@lang('messages.required fields') (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('sobre.update', ['lang' => $lang]) }}" enctype="multipart/form-data" id="formAbout">
							@method('PUT')
							@csrf
							<div class="row">

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.paragraph spanish')<b class="text-danger">*</b></label>
									<textarea class="form-control"name="paragraph_spanish" placeholder="" minlength="2" maxlength="191">{{ $about->paragraph_spanish }}</textarea> 
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.paragraph english')<b class="text-danger">*</b></label>
									<textarea class="form-control"name="paragraph_english" placeholder="" minlength="2" maxlength="191">{{ $about->paragraph_english }}</textarea> 
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.first list spanish')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list1_spanish" required placeholder="" value="{{ $about->list1_spanish }}" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.second list spanish')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list2_spanish" required placeholder="" value="{{ $about->list2_spanish }}" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.third list spanish')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list3_spanish" required placeholder="Introduzca el conteido del tercer check" value="{{ $about->list3_spanish }}" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.four list spanish')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list4_spanish" required placeholder="" value="{{ $about->list4_spanish }}" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.paragraph english')<b class="text-danger">*</b></label>
									<textarea class="form-control" name="paragraph_english" required minlength="2" maxlength="191">{{ $about->paragraph_english }}</textarea>
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.first list english')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list1_english" required value="{{ $about->list1_english }}" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.second list english')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list2_english" required value="{{ $about->list2_english }}" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.third list english')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list3_english" required value="{{ $about->list3_english }}" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.four list english')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="list4_english" required value="{{ $about->list4_english }}" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.image')<b class="text-danger">*</b></label>
									<input type="file" name="picture" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" data-default-file="{{ '/web/images/about/'.$about->picture }}" />
								</div> 

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="about">@lang('messages.update')</button>
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
<script src="{{ asset('/web/vendors/lobibox/Lobibox.js') }}"></script>
<script src="{{ asset('/web/vendors/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('/web/vendors/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/web/vendors/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/web/vendors/validate/messages_es.js') }}"></script>
<script src="{{ asset('/web/js/validate.js') }}"></script>
@endsection
