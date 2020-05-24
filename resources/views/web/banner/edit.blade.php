@extends('layouts.web')

@section('title', __('messages.edit banners'))

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
					<h3>@lang('messages.edit banners')</h3>
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
						<h3 class="text-heading">@lang('messages.edit banners')</h3>

						<h6 class="card-subtitle">@lang('messages.required fields') (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('banner.update', ['lang' => $lang]) }}" enctype="multipart/form-data" id="formBanner">
							@method('PUT')
							@csrf
							<div class="row">
								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.first content spanish')<b class="text-danger">*</b></label>
									<textarea class="form-control" name="banner1_spanish" required minlength="2" maxlength="191">{{ $banner->banner1_spanish }}</textarea> 
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.first content english')<b class="text-danger">*</b></label>
									<textarea class="form-control" name="banner1_english" required minlength="2" maxlength="191">{{ $banner->banner1_english }}</textarea>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.first banner')<b class="text-danger">*</b></label>
									<input type="file" name="picture1" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" data-default-file="{{ '/web/images/banner/'.$banner->picture1 }}" />
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.second content spanish')<b class="text-danger">*</b></label>
									<textarea class="form-control" name="banner2_spanish" required minlength="2" maxlength="191">{{ $banner->banner2_spanish }}</textarea>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.second content english')<b class="text-danger">*</b></label>
									<textarea class="form-control" name="banner2_english" required minlength="2" maxlength="191">{{ $banner->banner2_english }}</textarea>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.second banner')<b class="text-danger">*</b></label>
									<input type="file" name="picture2" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" data-default-file="{{ '/web/images/banner/'.$banner->picture2 }}" />
								</div> 

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.third content spanish')<b class="text-danger">*</b></label>
									<textarea class="form-control" name="banner3_spanish" required minlength="2" maxlength="191">{{ $banner->banner3_spanish }}</textarea>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.third content english')<b class="text-danger">*</b></label>
									<textarea class="form-control" name="banner3_english" required minlength="2" maxlength="191">{{ $banner->banner3_english }}</textarea>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.third banner')<b class="text-danger">*</b></label>
									<input type="file" name="picture2" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" data-default-file="{{ '/web/images/banner/'.$banner->picture3 }}" />
								</div> 

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="banner">@lang('messages.save')</button>
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
