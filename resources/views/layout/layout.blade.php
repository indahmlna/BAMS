<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" style="size: 30px; " href="{{url('images/logo-pnm.png')}}">

	<title>KDL</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{URL('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">

	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor_components/datatable/datatables.min.css') }}" />

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{URL('css/bootstrap-extend.css')}}">

	<!-- Theme style -->
	<link rel="stylesheet" href="{{URL('css/master_style.css') }}">

	<!-- Hyper Admin skins -->
	<link rel="stylesheet" href="{{URL('css/skins/_all-skins.css') }}">

	<!-- Select2 -->
	<link rel="stylesheet" href="{{URL('assets/vendor_components/select2/dist/css/select2.min.css') }}">

	<!-- Select2 -->
	<link rel="stylesheet" href="assets/vendor_components/select2/dist/css/select2.min.css">

	<!--alerts CSS -->
	<link href="assets/vendor_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<!-- <style>
.user-profile {
	background-color: #4040ff;
}
</style> -->

<body class="hold-transition skin-info light-sidebar sidebar-collapse sidebar-mini" style="background-image: url(../../images/bg-2.jpg)" data-overlay="7">
	<div class="wrapper">

		{{-- header  --}}
		@include('header')

		{{-- sidebar  --}}
		@if(Session::has('kdl_NIP'))
		@include('menu')

		@endif


		{{-- content  --}}
		<div class="content-wrapper">
			<div class="container-full">
				<section class="content">
					<div class="row">
						@yield('body')
					</div>
				</section>
			</div>
		</div>

		{{-- footer  --}}

		@include('footer')

		{{-- aside right  --}}
	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="{{URL('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>

	<!-- popper -->
	<script src="{{URL('assets/vendor_components/popper/dist/popper.min.js')}}"></script>

	<!-- Bootstrap 4.0-->
	<script src="{{URL('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

	<!-- SlimScroll -->
	<script src="{{URL('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

	<!-- FastClick -->
	<script src="{{URL('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

	<!-- Hyper Admin App -->
	<script src="{{URL('js/template.js')}}"></script>

	<!-- Hyper Admin for demo purposes -->
	<script src="{{URL('js/demo.js')}}"></script>

	<!-- This is data table -->
	<script src="{{URL('assets/vendor_components/datatable/datatables.min.js')}}"></script>

	<!-- Hyper Admin for Data Table -->
	<script src="{{URL('js/pages/data-table.js')}}"></script>

	<!-- Select2 -->
	<script src="{{URL('assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>

	<!-- Sweet-Alert  -->
	<script src="assets/vendor_components/sweetalert/sweetalert.min.js"></script>
	<script src="assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js"></script>
	@yield('script')
</body>

</html>