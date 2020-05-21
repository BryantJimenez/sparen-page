@extends('layouts.web')

@section('title', 'Listado de Usuarios')

@section('links')
<link rel="stylesheet" href="{{ asset('/web/vendors/lobibox/Lobibox.min.css') }}">
@endsection


@section('content')

<div class="bradcam_area breadcam_bg_6">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Lista de Usuarios</h3>
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
							<th scope="col">Nombre Completo</th>
							<th scope="col">Correo Electrónico</th>
							<th scope="col">DNI</th>
							<th scope="col">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<th scope="row">{{ $num++ }}</th>
							<td>{{ $user->name." ".$user->lastname }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->dni }}</td>
							<td class="d-flex">
								<a class="btn btn-info btn-circle btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar" href="{{ route('usuario.edit', ['slug' => $user->slug]) }}"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
							</td>
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

<script src="{{ asset('/web/vendors/lobibox/Lobibox.js') }}"></script>


@endsection