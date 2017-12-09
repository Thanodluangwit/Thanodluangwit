<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Harmony - Free responsive Bootstrap admin template by Themestruck.com</title>

    <link href="{{ asset('public/admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/bootstrap-social.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/fileinput.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">
    
    
    <script src="{{ asset('public/admin/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/Chart.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/fileinput.js') }}"></script>
	<script src="{{ asset('public/admin/js/chartData.js') }}"></script>
	<script src="{{ asset('public/admin/js/main.js') }}"></script>
    <script src="{{ asset('public/js/jscolor.js') }}"></script>
    <script src="{{ asset('public/ckeditor/ckeditor.js') }}"></script>

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
		<div class="login-page bk-img" >
		<div class="form-content">
			<div class="container">
				<div class="row">
					@yield('content')
				</div>
            </div>
		</div>
	</div>
	
</body>

</html>