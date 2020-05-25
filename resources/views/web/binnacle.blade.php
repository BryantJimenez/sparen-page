@extends('layouts.web')

@section('title', __('messages.binnacle'))

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/datatables/jquery.dataTables.min.css') }}">
@endsection

@section('content')

<div class="bradcam_area breadcam_bg_2">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>@lang('messages.binnacle')</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table id="@if($lang=="es"){{ "tabla" }}@else{{ "table-en" }}@endif" class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">@lang('messages.user')</th>
							<th scope="col">@lang('messages.activity')</th>
							<th scope="col">@lang('messages.date')</th>
						</tr>
					</thead>
					<tbody>
						@foreach($binnacle as $b)
						<tr>
							<th scope="row">{{ $num++ }}</th>
							<td>{{ $b->user->name." ".$b->user->lastname }}</td>
							<td>{{ $b->activity }}</td>
							<td>{{ $b->created_at }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

@endsection

@section('script')
<script src="{{ asset('/web/vendors/datatables/jquery.dataTables.min.js') }}"></script>
@endsection