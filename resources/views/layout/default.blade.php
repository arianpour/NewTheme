@extends('layout.master ')
@section('content')
	<body>
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	@include('layout.navbar')
	@include('layout.menuBar')
	@include('layout.gridMenu')


	<!-- Page -->
	<div class="page">
		<div class="page-content">
			@yield('page-content')
		</div>
	</div>
	<!-- End Page -->



@endsection