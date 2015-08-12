@extends('layout.master')
@section('body-class','dashboard')

<!-- Page -->
@section('content')
	<div class="page-content padding-30 container-fluid">
		<div class="row" data-plugin="matchHeight" data-by-row="true">
			<div class="col-xlg-6 col-md-6">
				<!-- Widget Linearea Color -->
				<div class="widget widget-shadow widget-responsive" id="widgetLineareaColor">
					<div class="widget-content">
						<div class="padding-top-30 padding-30" style="height:calc(100% - 250px);">
							<div class="row">
								<div class="col-xs-7">
									<p class="font-size-20 blue-grey-700">Eneergy Predictions</p>
									<p>Quisque volutpat condimentum velit. Class aptent taciti</p>
									<div class="counter counter-md text-left">
										<div class="counter-number-group">
											<span class="counter-icon red-600"><i class="icon wb-triangle-up" aria-hidden="true"></i></span>
											<span class="counter-number red-600 font-weight-bold">2,250</span>
										</div>
									</div>
								</div>
								<div class="col-xs-5">
									<div class="pull-right clearfix">
										<ul class="list-unstyled">
											<li class="margin-bottom-5 text-truncate">
												<i class="icon wb-medium-point green-600 margin-right-5" aria-hidden="true"></i>                          Diretary intake
											</li>
											<li class="margin-bottom-5 text-truncate">
												<i class="icon wb-medium-point purple-600 margin-right-5" aria-hidden="true"></i>                          Motion
											</li>
											<li class="margin-bottom-5 text-truncate">
												<i class="icon wb-medium-point blue-600 margin-right-5" aria-hidden="true"></i>                          Other
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="ct-chart height-250"></div>
					</div>
				</div>
				<!-- End Widget Linearea Color -->
			</div>

			<div class="col-xlg-6 col-md-6">
				<!-- Widget Stacked Bar -->
				<div class="widget widget-shadow" id="widgetStackedBar">
					<div class="widget-content">
						<div class="padding-30 height-150">
							<p>MARKET DOW</p>
							<div class="red-600">
								<i class="wb-triangle-up font-size-20 margin-right-5"></i>
								<span class="font-size-30 font-weight-bold">26,580.62</span>
							</div>
						</div>
						<div class="counters padding-bottom-20 padding-horizontal-30" style="height:calc(100% - 350px);">
							<div class="row no-space">
								<div class="col-xs-4">
									<div class="counter counter-sm">
										<div class="counter-label text-uppercase">APPL</div>
										<div class="counter-number-group text-truncate">
											<span class="counter-number-related green-600">+</span>
											<span class="counter-number green-600">82.24</span>
											<span class="counter-number-related green-600">%</span>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="counter counter-sm">
										<div class="counter-label text-uppercase">FB</div>
										<div class="counter-number-group text-truncate">
											<span class="counter-number-related red-600">-</span>
											<span class="counter-number red-600">12.06</span>
											<span class="counter-number-related red-600">%</span>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="counter counter-sm">
										<div class="counter-label text-uppercase">GOOG</div>
										<div class="counter-number-group text-truncate">
											<span class="counter-number-related green-600">+</span>
											<span class="counter-number green-600">24.86</span>
											<span class="counter-number-related green-600">%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="ct-chart height-200"></div>
					</div>
				</div>
				<!-- End Widget Stacked Bar -->
			</div>

			<div class="col-xlg-8 col-md-12">
				<!-- Widget Statistic -->
				<div class="widget widget-shadow" id="widgetStatistic">
					<div class="widget-content">
						<div class="row no-space height-full" data-plugin="matchHeight">
							<div class="col-sm-8 col-xs-12">
								<div id="widgetJvmap" class="height-full"></div>
							</div>
							<div class="col-sm-4 col-xs-12 padding-30">
								<div class="form-group">
									<div class="input-search input-search-dark">
										<i class="input-search-icon wb-search" aria-hidden="true"></i>
										<input type="text" class="form-control" name="" placeholder="Search...">
									</div>
								</div>
								<p class="font-size-20 blue-grey-700">Statistic</p>
								<p class="blue-grey-400">Status: live</p>
								<p>
									<i class="icon wb-map blue-grey-400 margin-right-10" aria-hidden="true"></i>
									<span>258 Countries, 4835 Cities</span>
								</p>
								<ul class="list-unstyled margin-top-20">
									<li>
										<p>VISITS</p>
										<div class="progress progress-xs margin-bottom-25">
											<div class="progress-bar progress-bar-info bg-blue-600" style="width: 70.3%" aria-valuemax="100"
											     aria-valuemin="0" aria-valuenow="70.3" role="progressbar">
												<span class="sr-only">70.3%</span>
											</div>
										</div>
									</li>
									<li>
										<p>TODAY</p>
										<div class="progress progress-xs margin-bottom-25">
											<div class="progress-bar progress-bar-info bg-green-600" style="width: 70.3%" aria-valuemax="100"
											     aria-valuemin="0" aria-valuenow="70.3" role="progressbar">
												<span class="sr-only">70.3%</span>
											</div>
										</div>
									</li>
									<li>
										<p>WEEK</p>
										<div class="progress progress-xs margin-bottom-0">
											<div class="progress-bar progress-bar-info bg-purple-600" style="width: 70.3%"
											     aria-valuemax="100" aria-valuemin="0" aria-valuenow="70.3"
											     role="progressbar">
												<span class="sr-only">70.3%</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- End Widget Statistic -->
			</div>

			<div class="col-xlg-4 col-md-12">
				<div class="row height-full">
					<div class="col-xlg-12 col-md-6" style="height:50%;">
						<!-- Widget Linepoint -->
						<div class="widget widget-shadow bg-blue-600 white" id="widgetLinepoint">
							<div class="widget-content">
								<div class="padding-top-25 padding-horizontal-30">
									<div class="row no-space">
										<div class="col-xs-6">
											<p>Today Sale's</p>
											<p class="purple-200">Last Sale 23.45 USD</p>
										</div>
										<div class="col-xs-6 text-right">
											<p class="font-size-30 text-nowrap">450 USD</p>
										</div>
									</div>
								</div>
								<div class="ct-chart height-120"></div>
							</div>
						</div>
						<!-- End Widget Linepoint -->
					</div>
					<div class="col-xlg-12 col-md-6" style="height:50%;">
						<!-- Widget Sale Bar -->
						<div class="widget widget-shadow bg-purple-600 white" id="widgetSaleBar">
							<div class="widget-content">
								<div class="padding-top-25 padding-horizontal-30">
									<div class="row no-space">
										<div class="col-xs-6">
											<p>Month Sale's</p>
											<p class="purple-200">2% higher than last month</p>
										</div>
										<div class="col-xs-6 text-right">
											<p class="font-size-30 text-nowrap">$ 14,500</p>
										</div>
									</div>
								</div>
								<div class="ct-chart height-120"></div>
							</div>
						</div>
						<!-- End Widget Sale Bar -->
					</div>
				</div>
			</div>

			<div class="col-xlg-6 col-md-12">
				<!-- Widget OVERALL VIEWS -->
				<div class="widget widget-shadow widget-responsive" id="widgetOverallViews">
					<div class="widget-content padding-30">
						<div class="row padding-bottom-30" style="height:calc(100% - 250px);">
							<div class="col-xs-4">
								<div class="counter counter-md text-left">
									<div class="counter-label">OVERALL VIEWS</div>
									<div class="counter-number-group text-truncate">
										<span class="counter-number-related red-600 font-weight-bold">$</span>
										<span class="counter-number red-600 font-weight-bold">432,852</span>
									</div>
									<div class="counter-label">2% higher than last month</div>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="counter counter-sm text-left inline-block">
									<div class="counter-label">MY BALANCE</div>
									<div class="counter-number-group">
										<span class="counter-number-related">$</span>
										<span class="counter-number">12,346</span>
									</div>
								</div>
								<div class="ct-chart inline-block small-bar-one"></div>
							</div>
							<div class="col-xs-4">
								<div class="counter counter-sm text-left inline-block">
									<div class="counter-label">NEW ORDERS</div>
									<div class="counter-number-group">
										<span class="counter-number-related">$</span>
										<span class="counter-number">17,555</span>
									</div>
								</div>
								<div class="ct-chart inline-block small-bar-two"></div>
							</div>
						</div>
						<div class="ct-chart line-chart height-250"></div>
					</div>
				</div>
				<!-- End Widget OVERALL VIEWS -->
			</div>

			<div class="col-xlg-6 col-md-12">
				<!-- Widget Timeline -->
				<div class="widget widget-shadow widget-responsive" id="widgetTimeline">
					<div class="widget-content">
						<div class="padding-30" style="height:120px;">
							<div class="row">
								<div class="col-xs-4">
									<div class="counter text-left">
										<div class="counter-label blue-grey-700">Total usage</div>
										<div class="counter-number-group">
											<span class="counter-number red-600 font-weight-bold">21,451</span>
											<span class="counter-number-related red-600 font-weight-bold">MB</span>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="counter text-left">
										<div class="counter-label">Currently</div>
										<div class="counter-number-group">
											<span class="counter-number">227.34</span>
											<span class="counter-number-related">KB</span>
										</div>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="counter text-left">
										<div class="counter-label">Average</div>
										<div class="counter-number-group">
											<span class="counter-number">117.65</span>
											<span class="counter-number-related">MB</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<ul class="list-unstyled padding-bottom-50" style="height:calc(100% - 270px);">
							<li class="padding-horizontal-30 padding-vertical-15 container-fluid">
								<div class="row">
									<div class="col-xs-3">Mail App</div>
									<div class="col-xs-6">210,685 users are using</div>
									<div class="col-xs-3 green-600">227.34KB</div>
								</div>
							</li>
							<li class="padding-horizontal-30 padding-vertical-15 container-fluid">
								<div class="row">
									<div class="col-xs-3">Calendar</div>
									<div class="col-xs-6">10,685 users are using</div>
									<div class="col-xs-3 green-600">128.62KB</div>
								</div>
							</li>
						</ul>
						<div class="ct-chart height-150"></div>
					</div>
				</div>
				<!-- End Widget Timeline -->
			</div>

			<div class="col-xlg-6 col-md-12">
				<!-- Panel California -->
				<div class="widget widget-shadow" id="widgetWeather">
					<div class="widget-content">
						<div class="row no-space height-full">
							<div class="col-sm-7 height-full">
								<div class="padding-35 text-center">
									<h4>California, Usa</h4>
									<p class="blue-grey-400 margin-bottom-35">MONDAY MAY 11, 2015</p>
									<canvas id="widgetSunny" height="60" width="60"></canvas>
									<div class="font-size-40 red-600 font-weight-bold">
										26°
										<span class="font-size-30">C</span>
									</div>
									<div>Sunday</div>
								</div>
								<div class="weather-times padding-30">
									<div class="row no-space text-center">
										<div class="col-xs-3">
											<div class="weather-day vertical-align">
												<div class="vertical-align-middle">
													<div class="margin-bottom-5">12:00</div>
													<i class="wi-day-cloudy font-size-24 margin-bottom-5"></i>
													<div class="red-600">24°
														<span class="font-size-12">C</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-3">
											<div class="weather-day vertical-align">
												<div class="vertical-align-middle">
													<div class="margin-bottom-5">12:30</div>
													<i class="wi-day-sunny font-size-24 margin-bottom-5"></i>
													<div class="red-600">26°
														<span class="font-size-12">C</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-3">
											<div class="weather-day vertical-align">
												<div class="vertical-align-middle">
													<div class="margin-bottom-5">13:00</div>
													<i class="wi-day-sunny font-size-24 margin-bottom-5"></i>
													<div class="red-600">28°
														<span class="font-size-12">C</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-3">
											<div class="weather-day vertical-align">
												<div class="vertical-align-middle">
													<div class="margin-bottom-5">13:30</div>
													<i class="wi-day-sunny font-size-24 margin-bottom-5"></i>
													<div class="red-600">30°
														<span class="font-size-12">C</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-5 bg-blue-grey-100 height-full">
								<div class="weather-list">
									<ul class="list-unstyled margin-0">
										<li class="container-fluid">
											<div class="row no-space">
												<div class="col-xs-4">
													SUN
												</div>
												<div class="col-xs-4">
													<i class="wi-day-cloudy font-size-24"></i>
												</div>
												<div class="col-xs-4">
													24 - 26
												</div>
											</div>
										</li>
										<li class="container-fluid">
											<div class="row no-space">
												<div class="col-xs-4">
													SUN
												</div>
												<div class="col-xs-4">
													<i class="wi-day-cloudy font-size-24"></i>
												</div>
												<div class="col-xs-4">
													24 - 26
												</div>
											</div>
										</li>
										<li class="container-fluid">
											<div class="row no-space">
												<div class="col-xs-4">
													SUN
												</div>
												<div class="col-xs-4">
													<i class="wi-day-cloudy font-size-24"></i>
												</div>
												<div class="col-xs-4">
													24 - 26
												</div>
											</div>
										</li>
										<li class="container-fluid">
											<div class="row no-space">
												<div class="col-xs-4">
													SUN
												</div>
												<div class="col-xs-4">
													<i class="wi-day-cloudy font-size-24"></i>
												</div>
												<div class="col-xs-4">
													24 - 26
												</div>
											</div>
										</li>
										<li class="container-fluid">
											<div class="row no-space">
												<div class="col-xs-4">
													SUN
												</div>
												<div class="col-xs-4">
													<i class="wi-day-cloudy font-size-24"></i>
												</div>
												<div class="col-xs-4">
													24 - 26
												</div>
											</div>
										</li>
										<li class="container-fluid">
											<div class="row no-space">
												<div class="col-xs-4">
													SUN
												</div>
												<div class="col-xs-4">
													<i class="wi-day-cloudy font-size-24"></i>
												</div>
												<div class="col-xs-4">
													24 - 26
												</div>
											</div>
										</li>
										<li class="container-fluid">
											<div class="row no-space">
												<div class="col-xs-4">
													SUN
												</div>
												<div class="col-xs-4">
													<i class="wi-day-cloudy font-size-24"></i>
												</div>
												<div class="col-xs-4">
													24 - 26
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Panel California -->
			</div>

			<div class="col-xlg-3 col-md-6">
				<!-- Panel Watchlist -->
				<div class="widget widget-shadow" id="widgetTable">
					<div class="widget-body padding-30">
						<h3 class="widget-title">
							<span class="text-truncate">Watch List</span>
							<span class="pull-right red-600 font-size-24 font-weight-bold">$ 102,967</span>
						</h3>
						<form class="margin-top-25" action="#" role="search">
							<div class="input-search input-search-dark">
								<i class="input-search-icon wb-search" aria-hidden="true"></i>
								<input type="text" class="form-control" placeholder="Search.." />
							</div>
						</form>
					</div>
					<table class="table margin-bottom-0">
						<tbody>
						<tr>
							<td>GMY</td>
							<td>$ 9,500</td>
							<td class="green-600">+ 458</td>
						</tr>
						<tr>
							<td>KPM</td>
							<td>$ 15,425</td>
							<td class="red-600">- 1,632</td>
						</tr>
						<tr>
							<td>PTR</td>
							<td>$ 11,540</td>
							<td class="green-600">+ 8,326</td>
						</tr>
						<tr>
							<td>HGM</td>
							<td>$ 15,855</td>
							<td class="green-600">+ 11,326</td>
						</tr>
						<tr>
							<td>MKR</td>
							<td>$ 18,500</td>
							<td class="red-600">- 6,586</td>
						</tr>
						</tbody>
					</table>
				</div>
				<!-- End Panel Watchlist -->
			</div>

			<div class="col-xlg-3 col-md-6">
				<!-- Widget Linepoint -->
				<div class="widget widget-shadow" id="widgetLinepointDate">
					<div class="widget-body padding-30">
						<h3 class="widget-title">Sales Analysis
							<span Class="label label-default label-round pull-right">View</span>
						</h3>
						<div class="row text-center margin-vertical-25">
							<div class="col-xs-4">
								<div class="counter">
									<div class="counter-label">TOTAL</div>
									<div class="counter-number red-600 font-weight-bold">20,186</div>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="counter">
									<div class="counter-label">TODAY</div>
									<div class="counter-number red-600">36</div>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="counter">
									<div class="counter-label">WEEK</div>
									<div class="counter-number red-600">60</div>
								</div>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
							nec odio. Praesent libero.</p>
					</div>
					<div class="ct-chart height-150"></div>
				</div>
				<!-- End Widget Linepoint -->
			</div>
		</div>
	</div>
@endsection
		<!-- End Page -->

@section('scripts')
<!-- Plugins For This Page -->
<script src="vendor/skycons/skycons.js"></script>
<script src="vendor/chartist-js/chartist.min.js"></script>
<script src="vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js"></script>
<script src="vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
<script src="vendor/jvectormap/jquery-jvectormap.min.js"></script>
<script src="vendor/jvectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
<script src="vendor/matchheight/jquery.matchHeight-min.js"></script>


<!-- Scripts For This Page -->
<script src="js/components/matchheight.js"></script>
<script src="js/components/jvectormap.js"></script>

<script>
	$(document).ready(function($) {
		Site.run();

		// Widget Linearea Color
		// ---------------------
		(function() {
			var lineareaColor = new Chartist.Line(
					'#widgetLineareaColor .ct-chart', {
						labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
						series: [
							[4, 4.5, 4.3, 4, 5, 6, 5.5],
							[3, 2.5, 3, 3.5, 4.2, 4, 5],
							[1, 2, 2.5, 2, 3, 2.8, 4]
						]
					}, {
						low: 0,
						showArea: true,
						showPoint: false,
						showLine: false,
						fullWidth: true,
						chartPadding: {
							top: 0,
							right: 0,
							bottom: 0,
							left: 0
						},
						axisX: {
							showLabel: false,
							showGrid: false,
							offset: 0
						},
						axisY: {
							showLabel: false,
							showGrid: false,
							offset: 0
						},
						plugins: [
							Chartist.plugins.tooltip()
						]
					});
		})();

		// Widget Stacked Bar
		// ------------------
		(function() {
			var stacked_bar = new Chartist.Bar(
					'#widgetStackedBar .ct-chart', {
						labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
							'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K',
							'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V',
							'W', 'X', 'Y', 'Z'
						],
						series: [
							[70, 100, 110, 80, 95, 90, 100, 110, 120, 130, 70,
								110, 120, 110, 130, 120, 140, 150, 135, 115, 100,
								105, 120, 160, 150, 140, 155, 130, 140, 125, 120,
								125, 110, 130, 120, 80
							],
							[150, 180, 190, 160, 175, 170, 180, 190, 200, 210,
								150, 190, 200, 190, 210, 200, 220, 230, 215, 195,
								180, 185, 200, 240, 230, 220, 235, 210, 220, 205,
								200, 205, 190, 210, 200, 160
							]
						]
					}, {
						stackBars: true,
						fullWidth: true,
						seriesBarDistance: 0,
						chartPadding: {
							top: 0,
							right: 30,
							bottom: 30,
							left: 20
						},
						axisX: {
							showLabel: false,
							showGrid: false,
							offset: 0
						},
						axisY: {
							showLabel: false,
							showGrid: false,
							offset: 0
						},
						plugins: [
							Chartist.plugins.tooltip()
						]
					});
		})();

		// Widget Statistic
		// ----------------
		(function() {
			(function() {
				var defaults = $.components.getDefaults('vectorMap');
				var options = $.extend({}, defaults, {
					map: "au_mill_en",
					markers: [{
						latLng: [-33.55, 150.53],
						name: '1,512 Visits'
					}, {
						latLng: [-37.5, 144.58],
						name: '940 Visits'
					}, {
						latLng: [-31.58, 115.49],
						name: '340 Visits'
					}],
					markerStyle: {
						initial: {
							r: 6,
							fill: $.colors("blue-grey", 600),
							stroke: $.colors("blue-grey", 600),
							"stroke-width": 6,
							"stroke-opacity": 0.6
						},
						hover: {
							r: 10,
							fill: $.colors("blue-grey", 500),
							"stroke-width": 0
						}
					}
				}, true);

				$('#widgetJvmap').vectorMap(options);
			})();
		})();

		// Widget Linepoint
		// ----------------
		(function() {
			new Chartist.Line("#widgetLinepoint .ct-chart", {
				labels: ['1', '2', '3', '4', '5', '6', '7', '8'],
				series: [
					[1, 1.5, 0.5, 2, 1, 2.5, 1.5, 2]
				]
			}, {
				low: 0,
				showArea: false,
				showPoint: true,
				showLine: true,
				fullWidth: true,
				lineSmooth: false,
				chartPadding: {
					top: 10,
					right: -4,
					bottom: 10,
					left: -4
				},
				axisX: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				axisY: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				plugins: [
					Chartist.plugins.tooltip()
				]
			});
		})();

		// Widget Sale Bar
		// ---------------
		(function() {
			new Chartist.Bar("#widgetSaleBar .ct-chart", {
				labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'K',
					'L', 'M', 'N', 'O', 'P', 'Q'
				],
				series: [
					[50, 90, 100, 90, 110, 100, 120, 130, 115, 95, 80, 85,
						100, 140, 130, 120
					]
				]
			}, {
				low: 0,
				fullWidth: true,
				chartPadding: {
					top: 0,
					right: 20,
					bottom: 30,
					left: 20
				},
				axisX: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				axisY: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				plugins: [
					Chartist.plugins.tooltip()
				]
			});
		})();

		// Widget Overall Views
		// --------------------
		(function() {
			new Chartist.Bar("#widgetOverallViews .small-bar-one", {
				labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
				series: [
					[120, 60, 100, 50, 40, 120, 80, 130]
				]
			}, {
				low: 0,
				fullWidth: true,
				chartPadding: {
					top: -10,
					right: 0,
					bottom: 0,
					left: 0
				},
				axisX: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				axisY: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				plugins: [
					Chartist.plugins.tooltip()
				]
			});

			new Chartist.Bar("#widgetOverallViews .small-bar-two", {
				labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
				series: [
					[50, 90, 30, 90, 130, 40, 120, 90]
				]
			}, {
				low: 0,
				fullWidth: true,
				chartPadding: {
					top: -10,
					right: 0,
					bottom: 0,
					left: 0
				},
				axisX: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				axisY: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				plugins: [
					Chartist.plugins.tooltip()
				]
			});

			new Chartist.Line("#widgetOverallViews .line-chart", {
				labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
				series: [
					[20, 50, 70, 110, 100, 200, 230],
					[50, 80, 140, 130, 150, 110, 160]
				]
			}, {
				low: 0,
				showArea: false,
				showPoint: false,
				showLine: true,
				lineSmooth: false,
				fullWidth: true,
				chartPadding: {
					top: 0,
					right: 10,
					bottom: 0,
					left: 10
				},
				axisX: {
					showLabel: true,
					showGrid: false,
					offset: 30
				},
				axisY: {
					showLabel: true,
					showGrid: true,
					offset: 30
				},
				plugins: [
					Chartist.plugins.tooltip()
				]
			});
		})();

		// Widget Timeline
		// ---------------
		(function() {
			var timeline_labels = [];
			var timeline_data1 = [];
			var timeline_data2 = [];
			var totalPoints = 20;
			var updateInterval = 1000;
			var now = new Date().getTime();

			function GetData() {
				timeline_labels.shift();
				timeline_data1.shift();
				timeline_data2.shift();

				while (timeline_data1.length < totalPoints) {
					var x = Math.random() * 100 + 800;
					var y = Math.random() * 100 + 400;
					timeline_labels.push(now += updateInterval);
					timeline_data1.push(x);
					timeline_data2.push(y);
				}
			}

			var timlelineData = {
				labels: timeline_labels,
				series: [
					timeline_data1,
					timeline_data2
				]
			};

			var timelineOptions = {
				low: 0,
				showArea: true,
				showPoint: false,
				showLine: false,
				fullWidth: true,
				chartPadding: {
					top: 0,
					right: 0,
					bottom: 0,
					left: 0
				},
				axisX: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				axisY: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				plugins: [
					Chartist.plugins.tooltip()
				]
			};
			new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
					timelineOptions);

			function update() {
				GetData();

				new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
						timelineOptions);
				setTimeout(update, updateInterval);
			}

			update();

		})();

		(function() {
			var snow = new Skycons({
				"color": $.colors("blue-grey", 500)
			});
			snow.set(document.getElementById("widgetSnow"), "snow");
			snow.play();

			var sunny = new Skycons({
				"color": $.colors("blue-grey", 700)
			});
			sunny.set(document.getElementById("widgetSunny"), "clear-day");
			sunny.play();
		})();

		// Widget Linepoint
		// ----------------
		(function() {
			new Chartist.Line("#widgetLinepointDate .ct-chart", {
				labels: ['1', '2', '3', '4', '5', '6', '7', '8'],
				series: [
					[1, 1.5, 0.5, 2, 1, 2, 1.5, 1]
				]
			}, {
				low: 0,
				showArea: false,
				showPoint: true,
				showLine: true,
				fullWidth: true,
				lineSmooth: false,
				chartPadding: {
					top: 5,
					right: -4,
					bottom: 10,
					left: -4
				},
				axisX: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				axisY: {
					showLabel: false,
					showGrid: false,
					offset: 0
				},
				plugins: [
					Chartist.plugins.tooltip()
				]
			});
		})();
	});
</script>

@endsection