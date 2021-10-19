@extends('web.includes.master')
@section('title', 'Measurement For Men')
@section('content')
<style type="text/css">
   footer {
   display:none;
   }
   header {
   position: fixed;
   filter: invert(1);
   }
</style>
<section class="custom-sec1">
   <div class="container">
      <div class="sec-head1 text-center">
         <h3 class="col-white abril-font"> MEASUREMENT </h3>
      </div>
      <div class="row">
         <div class="col-md-3 col-lg-3 col-sm-6 col-12">
            <div class="measure-box5 text-center">
               <a href="#">
                  <img src="{{URL::to('/public/website')}}/images/measure-icon1.png">
                  <h5 class="col-white news-font"> AI ALGORITHM </h5>
               </a>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-6 col-12">
            <div class="measure-box5 text-center">
               <a href="#">
                  <img src="{{URL::to('/public/website')}}/images/measure-icon2.png">
                  <h5 class="col-white news-font"> MANUAL INPUT </h5>
               </a>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-6 col-12">
            <div class="measure-box5 text-center">
               <a href="#">
                  <img src="{{URL::to('/public/website')}}/images/measure-icon3.png">
                  <h5 class="col-white news-font"> STANDARD SIZES </h5>
               </a>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-6 col-12">
            <div class="measure-box5 text-center">
               <a href="#">
                  <img src="{{URL::to('/public/website')}}/images/measure-icon4.png"> 
                  <h5 class="col-white news-font"> SELECT SAVED MEASUREMENTS </h5>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection