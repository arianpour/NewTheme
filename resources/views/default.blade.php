@extends('layout.master')
@section('body-class','dashboard')

		<!-- Page -->
@section('content')

@endsection
<!-- end page -->

@section('scripts')
	<script>
		(function(document, window, $) {
			'use strict';

			var Site = window.Site;
			$(document).ready(function() {
				Site.run();
			});
		})(document, window, jQuery);
	</script>
@endsection