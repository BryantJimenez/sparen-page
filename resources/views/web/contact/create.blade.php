@extends('layouts.web')

@section('title', __('messages.contact'))

@section('content')

<!-- bradcam_area  -->
<div class="bradcam_area breadcam_bg_contact">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>@lang('messages.contact')</h3>
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
				@include('web.partials.errors')
				<h2 class="contact-title">@lang('messages.contact us')</h2>
			</div>
			<div class="col-lg-8">
				<form class="form-contact contact_form" action="{{ route('contacto.store', ['lang' => $lang]) }}" method="POST" id="formContact">
					@csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('messages.enter your name and lastname')'" placeholder="@lang('messages.enter your name and lastname')">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('messages.enter your email')'" placeholder="@lang('messages.enter your email')">
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = '@lang('messages.enter your message')'" placeholder="@lang('messages.enter your message')"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group mt-3">
						<button type="submit" action="contact" class="button button-contactForm boxed-btn">@lang('messages.send')</button>
					</div>
				</form>
			</div>
			<div class="col-lg-3 offset-lg-1">
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-home"></i></span>
					<div class="media-body">
						<h3>{{ $info->address }}</h3>
					</div>
				</div>
				{{-- <div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-tablet"></i></span>
					<div class="media-body">
						<h3>{{ $info->phone }}</h3>
					</div>
				</div> --}}
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-email"></i></span>
					<div class="media-body">
						<h3>{{ $info->email }}</h3>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-facebook"></i></span>
					<div class="media-body">
						<h3>{{ $info->facebook }}</h3>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-twitter"></i></span>
					<div class="media-body">
						<h3>{{ $info->twitter}}</h3>
					</div>
				</div>
				@guest
				@else
				<div class="video_service_btn">
					<a href="{{ route('contacto.edit', ['lang' => $lang]) }}" class="boxed-btn3">@lang('messages.edit')</a>
				</div>
				@endguest
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
