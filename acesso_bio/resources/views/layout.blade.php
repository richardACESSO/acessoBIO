<!doctype html>
<html >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>
	<title>Laravel Blade Template - @yield('title')</title>

	<link href="{{asset('css/main.css')}}" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

	<div role="main" class="col-md-8">
		@yield('container-right')
	</div>

	<div id="first">
		<div id="second"></div>
	</div>

	<div id="texts-field">
		@yield('texts-field')
	</div>

	@yield('img-field')

	<div id="footer">
		@yield('footer')
	</div>

</body>
</html>