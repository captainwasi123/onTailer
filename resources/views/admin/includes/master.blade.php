<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Dashboard </title>
      @include('admin.includes.style')
      @yield('addStyle')
   </head>
   <body>
      <!-- Header Section Starts Here -->
      	@include('admin.includes.header')
      <!-- Header Section Ends Here -->
      <!-- All Content Section Starts Here -->
      <section class="all-content">
         <!-- Left Sidebar Starts Here -->
         	@include('admin.includes.sidebar')
         <!-- Left Sidebar Ends Here -->
         <!-- Main Content Section Starts Here -->
         	@yield('content')
         <!-- Main Content Section Ends Here -->
      </section>
      <!-- All Content Section Ends Here -->
      <!-- Bootstrap Javascript -->
      @include('admin.includes.script')
      @yield('addScript')
      
   </body>
</html>