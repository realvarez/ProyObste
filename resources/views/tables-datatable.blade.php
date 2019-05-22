@extends('layouts.master')
@section('content')

<div id="main">



    <div class="content-page">

        <div class="content">

			<div class="container-fluid">



			<div class="">
							<div class="card" style="">


								<div class="card-body">

									<div class="table-responsive">
									<table id="example4" class="table table-bordered table-hover display">
									<thead>
										<tr>
											<th>Nombre</th>
											<th>Tipo</th>
											<th>Ultima modificacion</th>
											<th>Opciones</th>
										</tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($files as $file)
                                            <tr>
                                                <td>{{$file->file_name}}</td>
                                                <td>{{$file->state}}</td>
                                                <td>{{$file->file_year}}</td>
                                                <td><i class="fa fa-search bigfonts fa-x5" aria-hidden="true"></i>
                                                    <i class="fa fa-download bigfonts fa-x5" aria-hidden="true"></i>

                                                </td>
                                            </tr>
                                        @endforeach





                                    </tbody>

									</table>
									</div>

								</div>
							
						</div>




            </div>

		</div>

    </div>

</div>
<!-- END main -->

<script src="{{asset('js/modernizr.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/moment.min.js')}}"></script>

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/detect.js')}}"></script>
<script src="{{asset('js/fastclick.js')}}"></script>
<script src="{{asset('js/jquery.blockUI.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>



<!-- BEGIN Java Script for this page -->
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<script>
	// START CODE FOR BASIC DATA TABLE
	$(document).ready(function() {
		$('#example1').DataTable();
	} );
	// END CODE FOR BASIC DATA TABLE


		// START CODE Show / hide columns dynamically DATA TABLE
		$(document).ready(function() {
			var table = $('#example3').DataTable( {
				"scrollY": "350px",
				"paging": false
			} );

			$('a.toggle-vis').on( 'click', function (e) {
				e.preventDefault();

				// Get the column API object
				var column = table.column( $(this).attr('data-column') );

				// Toggle the visibility
				column.visible( ! column.visible() );
			} );
		} );
		// END CODE Show / hide columns dynamically DATA TABLE


		// START CODE Individual column searching (text inputs) DATA TABLE
		$(document).ready(function() {
			// Setup - add a text input to each footer cell
				var title = $(this).text();
				$(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );

			// DataTable
			var table = $('#example4').DataTable();

			// Apply the search
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
		// END CODE Individual column searching (text inputs) DATA TABLE
	</script>
<!-- END Java Script for this page -->

@endsection
