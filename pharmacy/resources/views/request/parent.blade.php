<!DOCTYPE html>
<html>
<head>
	<title>
		Request
	</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
	<link href="{{ asset('css/style.css')}}" rel="stylesheet"/>
	<link href="{{ asset('css/s.css')}}" rel="stylesheet">
	<link href="{{ asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
</head>
<body>
<div class="container">
	<h1>Requests</h1>
	@yield('main')
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-2.2.1.min.js.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js')}}"></script>
<script>

$(document).ready(function(){
	var table = $("#datatable").DataTable();
});
</script>
</body>
</html>