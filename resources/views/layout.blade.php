<!DOCTYPE html>
<html>
<head>
	<meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="apple-mobile-web-app-capable" content="yes">
  	<meta name="csrf-token" content="{{ csrf_token() }}" />
  	<meta charset="utf-8">
	<title>@yield('title')</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/67efa42a99.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	@yield('styles')
	<link rel="stylesheet" type="text/css" href="{{URL::to('public/src/css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('public/src/css/style.css')}}">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<hr class="jv-header-hr">
@yield('content')

<script src="https://code.jquery.com/jquery-1.12.4.min.js"
 integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
			  crossorigin="anonymous"></script>
<script type="text/javascript">
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

@yield('scripts')
</body>
</html>
