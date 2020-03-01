<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>@yield('page_title')</title>

	<!-- <title>Simple Sidebar - Start Bootstrap Template</title> -->
	<link rel="icon" type="image/ico" href="{{asset('Admin/images/logo-1.png')}}" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- dataTable css -->
	<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />

	<link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('Admin/css/jquery.datetimepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('Admin/css/styles.css') }}">


</head>
<body>
	@include('Admin/partials/header')
	@include('partials/alert')
	@include('Admin/partials/left-bar')

	@yield('main_content')





	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- dataTable js -->
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

	<!-- <script type="text/javascript" src="{{asset('Admin/js/jquery.js')}}"></script> -->
	<script type="text/javascript" src="{{asset('Admin/js/jquery.datetimepicker.full.min.js')}}"></script>


	<script>
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});

	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
	</script>

	<!-- <script type="text/javascript">
	$(document).ready(function() {
	$(".test").focus(function() {
	$(".margin-control-icon").css("color", "red");
}).blur(function() {
$(".margin-control-icon").css("color", "#0082D4");
});
});
</script>
-->
<!-- ===========================Date picker js==================== -->
<script type="text/javascript">
$('#date-time').datetimepicker({
	step:5,
	// timepicker:false,
	// format:'d.m.Y'
	//datepicker:false,
	//format:'H:i:s'
	// startDate:'+1971/05/01'//or 1986/12/08
	//minDate:'-1970/01/02',//yesterday is minimum date(for today use 0 or -1970/01/01)
	//maxDate:'+1970/01/02'//tomorrow is maximum date calendar
	//formatDate:'d.m.Y'
	//formatTime:'H'
	//closeOnDateSelect:true
	weeks:true,
	//theme:'dark'
});
</script>

<!-- ===========================file chooser js==================== -->
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
	var fileName = $(this).val().split("\\").pop();
	$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


</body>
</html>
