<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <title> Login | Admin | {{env('APP_NAME')}} </title>
      <!-- Animate With CSS -->
      <link rel="stylesheet" type="text/css" href="{{URL::to('/public/admin')}}/css/animate.css">
      <!-- Font Awesome KIT -->
      <link href="{{URL::to('/public/admin')}}/fontawesome-kit-5/css/all.css" rel="stylesheet">
      <link href="{{URL::to('/public/admin')}}/fontawesome-kit-5/css/fontawesome.css" rel="stylesheet">
      <link href="{{URL::to('/public/admin')}}/fontawesome-kit-5/css/brands.css" rel="stylesheet">
      <link href="{{URL::to('/public/admin')}}/fontawesome-kit-5/css/solid.css" rel="stylesheet">
      <script defer src="{{URL::to('/public/admin')}}/fontawesome-kit-5/js/all.js"></script>
      <script defer src="{{URL::to('/public/admin')}}/fontawesome-kit-5/js/brands.js"></script>
      <script defer src="{{URL::to('/public/admin')}}/fontawesome-kit-5/js/solid.js"></script>
      <script defer src="{{URL::to('/public/admin')}}/fontawesome-kit-5/js/fontawesome.js"></script>
      <!-- Bootstrap Grids -->
      <link href="{{URL::to('/public/admin')}}/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom Stylings -->
      <link href="{{URL::to('/public/admin')}}/css/custom.css" rel="stylesheet">
      <!-- Jquery Library -->
      <script type="text/javascript" src="{{URL::to('/public/admin')}}/js/jquery-3.2.1.min.js"></script>
   </head>
   <body>
      <!-- All Content Section Starts Here -->
      <section class="login-wrapper">
         <!-- Main Content Section Starts Here -->
            <div class="container">
               <div class="login-heading text-center">
                  <h3 class="col-black"> LOGIN HERE </h3>
               </div>
               <div class="login-box">
                  <form method="post">
                     @csrf
                     <div class="login-image text-center m-b-30">
                        <img src="{{URL::to('/public/admin')}}/images/avatar-1.jpg" width="95px">
                     </div>
                     <div class="login-form">
                        <div class="form-field">
                           <input type="text" placeholder="USERNAME" class="field-style1" name="username">  
                        </div>
                        <div class="form-field">
                           <input type="password" placeholder="PASSWORD" class="field-style1" name="password">   
                        </div>
                        <div class="form-field m-t-30">
                           <input type="submit" value="LOGIN" class="submit-btn1">
                        </div>
                        <div class="forgot-pass text-center">
                           <a href="" class="col-white"> Forgot Password ? </a>  
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         <!-- Main Content Section Ends Here -->
      </section>
      <!-- All Content Section Ends Here -->
      <!-- Bootstrap Javascript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="{{URL::to('/public/admin')}}/js/bootstrap.min.js"> </script>
      <script src="{{URL::to('/public/admin')}}/js/functions.js"> </script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      @if(session()->has('success'))
         <script type="text/javascript">
            $(document).ready(function(){
               Swal.fire("Success!", "{{ session()->get('success') }}", "success");
            });
         </script>
      @elseif(session()->has('error'))
         <script type="text/javascript">
            $(document).ready(function(){
               Swal.fire("Alert!", "{{ session()->get('error') }}", "warning");
            });
         </script>
      @endif
   </body>
</html>