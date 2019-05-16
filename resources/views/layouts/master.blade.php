<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
</head>
	<body class="adminbody">
		<div id="main">
			@include('partials.topbar')
			@if(\Request::route()->getName() != 'login')
				@include('partials.leftsidebar')
			@endif
			<div class="content-page">
				<div class="content">
					@yield('content')
				</div>
			</div>
			@include('partials.footer')
        </div>
        @include('partials.scripts')
	</body>
</html>
