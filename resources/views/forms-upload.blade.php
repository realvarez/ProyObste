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


					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Multiple file upload</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Home</li>
									<li class="breadcrumb-item active">Multiple file upload</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- end row -->



					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="card mb-3">
								<div class="card-header">
									<h3><i class="fa fa-file"></i> Example 1</h3>
									Files upload with drag & drop
								</div>

								<div class="card-body">

									<input type="file" name="files[]" id="filer_example1" multiple="multiple">

								</div>
							</div><!-- end card-->
						</div>



						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="card mb-3">
								<div class="card-header">
									<h3><i class="fa fa-file"></i> Example 2</h3>
									Maximum 3 files, all files together must have maximal 3MB and the extensions must be matched in the array ['jpg', 'png', 'gif'].
								</div>

								<div class="card-body">

									<input type="file" name="files[]" id="filer_example2" multiple="multiple">

								</div>
							</div><!-- end card-->
						</div>


					</div>





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