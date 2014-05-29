<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

		{{ HTML::style('/css/bootstrap.min.css') }}
		{{ HTML::style('/font-awesome/css/font-awesome.css') }}

		{{ HTML::style('/css/sb-admin.css') }}

		@yield('stylesheets')
	</head>

	<body>

		<div id="wrapper">

			@include('layouts.navbar')

			<div id="page-wrapper">
				@yield('content')
			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

		{{ HTML::script('/js/jquery-1.10.2.js') }}
		{{ HTML::script('/js/bootstrap.min.js') }}
		{{ HTML::script('/js/plugins/metisMenu/jquery.metisMenu.js') }}
		{{ HTML::script('/js/sb-admin.js') }}
		@yield('scripts')
	</body>
</html>
