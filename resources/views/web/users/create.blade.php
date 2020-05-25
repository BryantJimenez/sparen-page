@extends('layouts.web')

@section('title', __('messages.user registration'))

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/dropify/css/dropify.min.css') }}">
@endsection

@section('content')

<div class="bradcam_area breadcam_bg_5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>@lang('messages.user registration')</h3>
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
						<h3 class="text-heading">@lang('messages.user registration')</h3>

						<h6 class="card-subtitle">@lang('messages.required fields') (<b class="text-danger">*</b>)</h6>
						<form  method="POST" class="form" action="{{ route('usuario.store', ['lang' => $lang]) }}" enctype="multipart/form-data" id="formUser">
							@csrf
							<div class="row">
								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.name')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="name" required placeholder="@lang('messages.enter a name')" value="{{ old('name') }}" id="name" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.lastname')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="lastname" required placeholder="@lang('messages.enter a lastname')" value="{{ old('lastname') }}" minlength="2" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.dni') (@lang('messages.optional'))</label>
									<input class="form-control" type="text" name="dni" placeholder="@lang('messages.enter a dni')" value="{{ old('dni') }}" minlength="5" maxlength="15">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.email')<b class="text-danger">*</b></label>
									<input class="form-control" type="email" name="email" required placeholder="@lang('messages.enter a email')" value="{{ old('email') }}" minlength="5" maxlength="191">
								</div>


								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.address')<b class="text-danger">*</b></label>
									<input class="form-control" type="text" name="address" required placeholder="@lang('messages.enter a address')" value="{{ old('address') }}" minlength="5" maxlength="191">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.phone') (@lang('messages.optional'))</label>
									<input class="form-control" type="text" name="phone" placeholder="@lang('messages.enter a phone')" value="{{ old('phone') }}" id="phone" minlength="5" maxlength="15">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.password')<b class="text-danger">*</b></label>
									<input class="form-control" type="password" name="password" required placeholder="********" id="password" minlength="8" maxlength="40">
								</div>

								<div class="form-group col-lg-6 col-md-6 col-12">
									<label class="col-form-label">@lang('messages.confirm password')<b class="text-danger">*</b></label>
									<input class="form-control" type="password" name="password_confirmation" required placeholder="********" minlength="8" maxlength="40">
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">@lang('messages.photo') (@lang('messages.optional'))</label>
									<input type="file" name="photo" accept="image/*" id="input-file-now" class="@if($lang=="es"){{ 'dropify' }}@else{{ 'dropifys' }}@endif" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
								</div> 

								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="user">@lang('messages.save')</button>
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
