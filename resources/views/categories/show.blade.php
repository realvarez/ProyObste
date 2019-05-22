@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-12">
			<div class="breadcrumb-holder">
				<h1 class="main-title float-left"><i class="fas fa-folder" style="font-size: 20px;"></i>  Documentos /
					{{ucfirst($category->category_name)}}</h1>
				<ol class="breadcrumb float-right">
					<li class="breadcrumb-item">Home</li>
					<li class="breadcrumb-item active">{{ucfirst($category->category_name)}}</li>
				</ol>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="card" style="">
		<div class="card-body">
			<div class="table-responsive">
				<table id="table-documents" class="table table-bordered table-hover display">
					<thead>
						<tr>
                            <th>Nombre</th>
                            <th>Nombre Real</th>
							<th>Tipo</th>
							<th>Año</th>
							<th style="text-align: center">Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($files as $file)
							<tr>
                                <td>{{$file->file_name}}</td>
                                <td>{{$file->file_real_name}}</td>
								<td>{{$file->file_extension}}</td>
								<td>{{$file->file_year}}</td>
                                <td style="text-align: center">



                                <a href="/#" style="color:black">
                                    <i class="fa fa-search bigfonts fa-2x" aria-hidden="true"></i>
                                </a>
                                <a href="/storage/{{$file->id}}" style="color:black">
                                    <i class="fa fa-download bigfonts fa-2x" aria-hidden="true"></i>
                                </a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script>
	$(document).ready(function() {
		var table = $('#table-documents').DataTable({
			"language": {
				"sProcessing":     "Procesando...",
				"sLengthMenu":     "Mostrando _MENU_ registros",
				"sZeroRecords":    "No se encontraron resultados",
				"sEmptyTable":     "Ningún dato disponible en esta tabla",
				"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
				"sInfoPostFix":    "",
				"sSearch":         "Buscar:",
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
    	});

		table.columns().every( function () {
			var that = this;

			$( 'input', this.header() ).on( 'keyup change', function () {
				if ( that.search() !== this.value ) {
					that
						.search( this.value )
						.draw();
				}
			} );
		} );
	} );
</script>

@endsection
