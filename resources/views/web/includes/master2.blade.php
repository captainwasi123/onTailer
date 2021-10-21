<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> @yield('title') | {{env('APP_NAME')}} </title>

    @include('web.includes.style2')
    @yield('addStyle')

</head>
<body>

	@include('web.includes.header2')
	@yield('content')
	@include('web.includes.footer')
	@include('web.includes.script2')
    @yield('addScript')

</body>
</html> 
