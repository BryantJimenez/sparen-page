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

@section('script')

<script type="text/javascript">
  //datatable normal
  $(document).ready(function() {

  	 //datatable español
  	 var español = {
  	 	"sProcessing":     "Procesando...",
  	 	"sLengthMenu":     "Mostrar _MENU_ registros",
  	 	"sZeroRecords":    "No se encontraron resultados",
  	 	"sEmptyTable":     "Ningún resultado disponible en esta tabla",
  	 	"sInfo":           "Resultados del _START_ al _END_ de un total de _TOTAL_ registros",
  	 	"sInfoEmpty":      "No hay resultados",
  	 	"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
  	 	"sInfoPostFix":    "",
  	 	"sSearch":         "Buscar :",
  	 	"sUrl":            "",
  	 	"sInfoThousands":  ",",
  	 	"sLoadingRecords": "Cargando...",
  	 	"oPaginate": {
  	 		"sFirst":    "Primero",
  	 		"sLast":     "Último",
  	 		"sNext":     "Siguiente",
  	 		"sPrevious": "Anterior"
  	 	},
  	 	"oAria": {
  	 		"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
  	 		"sSortDescending": ": Activar para ordenar la columna de manera descendente"
  	 	}
  	 }

  	 //datatable export
  	 if ($('#tablaExport').length) {
  	 	$('#tablaExport').DataTable({
  	 		dom: 'Bfrtip',
  	 		buttons: ['excel', 'pdf'],
  	 		"language": español
  	 	});
  	 }

  	 if ($('#tabla').length) {
  	 	$('#tabla').DataTable({
  	 		"language": español
  	 	});
  	 }

  	});

  </script>
  @endsection