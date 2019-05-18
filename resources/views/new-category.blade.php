<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials.header')

	@include('partials.scripts')

</head>

<body class="adminbody">

	<div id="main">

		<!-- top bar navigation -->
		@include('partials.topbar')
		<!-- End Navigation -->


		<!-- Left Sidebar -->
		@include('partials.leftsidebar')
		<!-- End Sidebar -->


		<div class="content-page">

			<!-- Start content -->
			<div class="content">

				<div class="container-fluid">

					<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-xl-12">
								<div class="breadcrumb-holder">
									<h1 class="main-title float-left"> Nueva Categoría</h1>
									<ol class="breadcrumb float-right">
										<li class="breadcrumb-item">Home</li>
										<li class="breadcrumb-item active">Nueva Categoría</li>
									</ol>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<!-- end row -->



						<div class="row">

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin: auto auto;">
								<div class="card mb-3">
									<div class="card-header">
										<h3><i class="fas fa-folder-plus"></i></i> Añadir Categoría</h3>
									</div>

									<div class="card-body container col-md-12 col-lg-12 col-xl-12">
											<div class="form-group row">
												<div class="col-md-6 col-lg-6 col-xl-6">
													<label for="name"> Nombre de la categoría</label>
    											<input  type="text" class="form-control " id="name" placeholder="Ingrese el nombre">
												</div>
												

						
										    </div>

									</div>
									<div class="card-footer">
										<button type="submit" class="btn btn-primary pull-right"><i class="fas fa-long-arrow-alt-up"></i> Guardar</button>
									</div>
									@if (count($errors) > 0)
									<div class="alert alert-danger"  lang="es">
										<strong>Ups!</strong> Ha ocurrido un error con la subida de su documento <br><br>
										<ul>
											@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
									@endif
								</div><!-- end card-->
							</div>
						</div>
					</form>




				</div>
				<!-- END container-fluid -->

			</div>
			<!-- END content -->

		</div>
		<!-- END content-page -->

		@include('partials.footer')

	</div>
	<!-- END main -->

	<script src="{{asset('js/pikeadmin.js')}}"></script>
	<script src="{{asset('plugins/jquery.filer/js/jquery.filer.min.js')}}"></script>

</body>

</html>
