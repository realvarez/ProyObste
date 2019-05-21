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
				<div class="content-page">
			@else
				<div class="content-page" style="margin-left:0px; margin-top: 50px;">
			@endif
				<div class="content">
					@yield('content')
				</div>
			</div>
			@include('partials.footer')
        </div>
        @include('partials.scripts')
	</body>
</html>
