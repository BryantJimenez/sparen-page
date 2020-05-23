@extends('layouts.web')

@section('title', __('messages.edit info contact'))


@section('content')

<!-- bradcam_area  -->
<div class="bradcam_area breadcam_bg_2">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>@lang('messages.edit info contact')</h3>
				</div>
			</div>
		</div>
	</div> 
</div>
<!--/ bradcam_area  -->

<!-- ================ contact section start ================= -->
<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body"> 
						@include('web.partials.errors')
						<h3 class="text-heading">@lang('messages.edit info contact')</h3>
						<form class="form-contact contact_form" action="{{ route('contacto.update', ['lang' => $lang]) }}" method="POST" id="formInfoContact">
							@method('PUT')
							@csrf
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label class="col-form-label"><span class="contact-info__icon"><i class="ti-home"></i></span>@lang('messages.address')<b class="text-danger">*</b></label>
										<input class="form-control valid" name="address" id="address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('messages.enter your address')'" placeholder="@lang('messages.enter your address')" value="{{ $info->address }}">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-form-label"><span class="contact-info__icon"><i class="ti-tablet"></i></span></i>@lang('messages.phone')<b class="text-danger">*</b></label>
										<input class="form-control valid" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('messages.enter your phone')'" placeholder="@lang('messages.enter your phone')" value="{{ $info->phone }}">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-form-label"><span class="contact-info__icon"><i class="ti-email"></i></span>@lang('messages.email')<b class="text-danger">*</b></label>
										<input class="form-control valid" name="email" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('messages.enter your email')'" placeholder="@lang('messages.enter your email')" value="{{ $info->email }}">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-form-label"><span class="contact-info__icon"><i class="ti-facebook"></i></span>Facebook<b class="text-danger">*</b></label>
										<input class="form-control valid" name="facebook" id="facebook" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Facebook'" placeholder="Facebook" value="{{ $info->facebook }}">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-form-label"><span class="contact-info__icon"><i class="ti-twitter"></i></span>Twitter<b class="text-danger">*</b></label>
										<input class="form-control valid" name="twitter" id="twitter" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = Twitter" placeholder="Twitter" value="{{ $info->twitter}}">
									</div>
								</div>
							</div>
							<div class="form-group mt-3">
								<button type="submit" action="infoContact" class="button button-contactForm boxed-btn">@lang('messages.send')</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================ contact section end ================= -->

	@endsection

	@section('script')
	<script src="{{ asset('/web/vendors/validate/jquery.validate.js') }}"></script>
	<script src="{{ asset('/web/vendors/validate/additional-methods.js') }}"></script>
	<script src="{{ asset('/web/vendors/validate/messages_es.js') }}"></script>
	<script src="{{ asset('/web/js/validate.js') }}"></script>
	@endsection