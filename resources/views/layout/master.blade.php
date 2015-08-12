<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
	@include('layout.header')
			<body class="@yield('body-class')">
			<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
			<![endif]-->
			@include('layout.navbar')
			@include('layout.menuBar')
			@include('layout.gridMenu')
					<!-- Page -->
					<div class="page">
						@yield('content')
					</div>
			<!-- End Page -->
			<!-- Footer -->
			@include('layout.footer1')
			<!-- End Footer -->

			@include('layout.core')

			@yield('scripts')
			</body>

</html>