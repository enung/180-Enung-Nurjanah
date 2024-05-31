<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>QASFI</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="{{ asset('template/css/dataTables.bootstrap.min.css') }}">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="{{ asset('template/css/bootstrap-social.css') }}">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="{{ asset('template/css/bootstrap-select.css') }}">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="{{ asset('template/css/fileinput.min.css') }}">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="{{ asset('template/css/awesome-bootstrap-checkbox.css') }}">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="{{ asset('template/css/style.css')  }}">
	<script src="{{ asset('template/js/jquery.js') }}"></script>
	<script src="{{ asset('template/js/jquery.min.js') }}"></script>
</head>

<body>
	@include("partials.pages.dashboard.header")
	@include("partials.pages.dashboard.sidebar")
	@yield("content")

	<!-- Loading Scripts -->
	<script src="{{ asset('template/js/jquery.min.js') }}"></script>
	<script src="{{ asset('template/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('template/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('template/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('template/js/Chart.min.js') }}"></script>
	<script src="{{ asset('template/js/fileinput.js') }}"></script>
	<script src="{{ asset('template/js/chartData.js') }}"></script>
	<script src="{{ asset('template/js/main.js') }}"></script>
	<script src="{{ asset('js/load-content.js') }}"></script>

</body>

</html>