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

					<form action="{{route('files.store')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-xl-12">
								<div class="breadcrumb-holder">
									<h1 class="main-title float-left"> Subida de documentos</h1>
									<ol class="breadcrumb float-right">
										<li class="breadcrumb-item">Home</li>
										<li class="breadcrumb-item active">Subida de documentos</li>
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
										<h3><i class="fas fa-file-upload"></i> Subir Documento</h3>
									</div>

									<div class="card-body container col-md-12 col-lg-12 col-xl-12">
											<div class="form-group row">
												<input class="col-md-6 col-lg-6 col-xl-6" type="file" name="file" id="file">
												<div style="margin-top: 20px;" class="col-md-8 col-lg-8 col-xl-8">
													<label>Seleccione una categoría:</label>
													<select name="category_id" class="form-control form-control-sm ">
												@foreach ($categories as $category)
													<option  id="category_id"  value="{{$category->id}}">{{$category->category_name}}  </option>
												@endforeach
													</select>
												</div>
												<div style="margin-top: 20px; "class="col-md-4 col-lg-4 col-xl-4">
													<label> Fecha del documento:</label>
  													<input   name="file_year"  type="text" class="form-control form-control-sm" id="datetimepicker">
												</div>

						
										    </div>

									</div>
									<div class="card-footer">
										<button type="submit" class="btn btn-primary pull-right"><i class="fas fa-long-arrow-alt-up"></i> Subir</button>
									</div>
									@if (count($errors) > 0)
									<div class="alert alert-danger" >
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
