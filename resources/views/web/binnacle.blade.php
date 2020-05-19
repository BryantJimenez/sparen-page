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
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

@endsection

