@extends('layouts.web')

@section('title', 'Editar Usuarios')

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/dropify/css/dropify.min.css') }}">
@endsection


@section('content')

<div class="bradcam_area breadcam_bg_5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Editar "Usuarios"</h3>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection

@section('script')

<script src="{{ asset('/web/vendors/dropify/js/dropify.min.js') }}"></script>

@endsection