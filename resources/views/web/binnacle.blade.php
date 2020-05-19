@extends('layouts.web')

@section('title', 'Bitácora')


@section('content')

<div class="bradcam_area breadcam_bg_2">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Bitácora</h3>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table id="tabla" class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Usuario</th>
							<th scope="col">Actividad</th>
							<th scope="col">Fecha</th>
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

