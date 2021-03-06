<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> @yield('title') | {{env('APP_NAME')}} </title>
  
  @include('web.includes.style')
  @yield('addStyle')
 
</head>
<body>

  @include('web.includes.header')

  @yield('content')

  @include('web.includes.script')
  
  @yield('addScript')

</body>
</html> 
