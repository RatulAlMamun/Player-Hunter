<!DOCTYPE html>
<html>
<head>
	<title>Send Mail</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
</head>
<body>
	<div style="border: solid 1px #363636; padding: 1rem; width: 60%; margin: 0px auto;">
		<h1 style="font-size: 3rem; text-align: center; font-weight: bold; padding: .5rem 0; background: #c4c410;color:rgba(32, 128, 118,.75);">{{ $message1 }}</h1>
		<p>{{ $message2 }}</p>
		<hr class="my-4">
		<p style="font-size: 1.25rem; font-weight: 300;">{{ $message3 }}</p>
	</div>

	<script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
</body>
</html>