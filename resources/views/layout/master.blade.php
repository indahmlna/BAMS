<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <link rel="icon" href="../images/favicon.ico"> -->
    <link rel="icon" href="{{url('iimages/logo-pnm2.png') }}" class="img-circle">

    <title>PNM</title>

	<!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="{{URL::to('assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">

  <!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="{{URL::to('assets/vendor_components/datatable/datatables.min.css') }}"/>

  <!-- c3 CSS -->
  <link rel="stylesheet" type="text/css" href="{{URL::to('assets/vendor_components/c3/c3.min.css') }}">

	<!-- Bootstrap extend-->
  <link rel="stylesheet" href="{{URL::to('css/bootstrap-extend.css') }}">
  <link href="{{URL::to('assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

  <!-- toast CSS -->
  <link href="{{URL::to('assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css') }}" rel="stylesheet">

	<!-- theme style -->
  <link rel="stylesheet" href="{{URL::to('css/master_style.css') }}">

	<link rel="stylesheet" href="{{URL::to('assets/vendor_plugins/iCheck/all.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{URL::to('assets/vendor_components/select2/dist/css/select2.min.css') }}">


	<!-- Hyper Admin skins -->
	<link rel="stylesheet" href="{{URL::to('css/skins/_all-skins.css') }}">
	<script src="{{URL::to('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  <style>
		.example-modal .modal {
			position: relative;
			top: auto;
			bottom: auto;
			right: auto;
			left: auto;
			display: block;
			z-index: 1;
		}

		.example-modal .modal {
			background: transparent !important;
		}
	</style>

  </head>
  <body class="skin-info light-sidebar sidebar-mini sidebar-collapse">
  <div class="wrapper">
  <!-- @yield('head') -->
  @include('header')
  @yield('menu')
  @yield('body')

  @include('footer')

	<!-- jQuery 3 -->


        <!-- popper -->
        <script src="{{url('assets/vendor_components/popper/dist/popper.min.js') }}"></script>

        <!-- Bootstrap 4.0-->
        <script src="{{url('assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>

        <!-- date-paginator -->
        <!-- <script src="assets/vendor_components/date-paginator/moment.min.js"></script>
        <script src="assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/vendor_components/date-paginator/bootstrap-datepaginator.min.js"></script>
        <script src="js/pages/date-paginator.js"></script> -->

        <!-- Slimscroll -->
        <script src="{{url('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

        <!-- FastClick -->
        <script src="{{url('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>

        <!-- webticker -->
        <script src="{{url('assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js') }}"></script>

        <!-- apexcharts -->


        <!-- This is data table -->
        <script src="{{url('assets/vendor_components/datatable/datatables.min.js') }}"></script>

        <!-- Editable -->
        <script src="{{url('assets/vendor_components/tiny-editable/mindmup-editabletable.js') }}"></script>
        <script src="{{url('assets/vendor_components/tiny-editable/numeric-input-example.js') }}"></script>
        <script src="{{url('js/pages/editable-tables.js') }}"></script>



        <!-- C3 Plugins -->


        <!-- eChart Plugins -->


        <!-- Hyper Admin App -->
        <script src="{{url('js/template.js') }}"></script>

        <!-- Morris.js charts -->
<!-- Select2 -->
<script src="{{url('assets/vendor_components/select2/dist/js/select2.full.js') }}"></script>

<script src="{{url('assets/vendor_plugins/iCheck/icheck.min.js') }}"></script>


        <!-- <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script> -->
        <!-- Step 2 - Include the fusion theme -->
        <!-- <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script> -->


        <!-- Hyper Admin dashboard demo (This is only for demo purposes) -->
        <!-- <script src="js/pages/dashboard4.js"></script> -->

        <!-- Hyper Admin for demo purposes -->
        <script src="{{url('js/demo.js') }}"></script>

        <!-- Hyper Admin for Data Table -->
	      <script src="{{url('js/pages/data-table.js') }}"></script>

        	<!-- toast -->
        <script src="{{url('assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js') }}"></script>
        <script src="{{url('js/pages/toastr.js') }}"></script>



    </body>
    </html>
