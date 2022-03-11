@extends('admin.includes.master2')
@section('title', 'Admin login')
@section('content')

   <div class="container">
            <div class="login-heading text-center">
               <h3 class="col-black"> LOGIN HERE </h3>
            </div>
            <div class="login-box">
               <div class="login-image text-center m-b-30">
                  <img src="{{URL::to('/public/admin')}}/images/avatar-1.jpg" width="95px">
               </div>
               <div class="login-form">
                  <div class="form-field">
                     <input type="text" placeholder="USER ID" class="field-style1" name="">	
                  </div>
                  <div class="form-field">
                     <input type="password" placeholder="PASSWORD" class="field-style1" name="">	
                  </div>
                  <div class="form-field m-t-30">
                     <input type="submit" value="LOGIN" class="submit-btn1">
                  </div>
                  <div class="forgot-pass text-center">
                     <a href="" class="col-white"> Forgot Password ? </a>	
                  </div>
               </div>
            </div>
         </div>

@endsection