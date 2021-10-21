@extends('web.includes.master2')
@section('title', 'Fit Gurantee')
@section('content')

<!-- section heading -->
  <section>
    <div class="container-fluid custom-gird-website pad-top-100">
      <div class="about-section1">
        <h1 class="abril-font no-margin">FIT GURANTEE</h1>
      </div>
    </div>    
  </section>
<!-- section close -->

<!-- section1 start -->
  <section>
    <div class="container-fluid custom-gird-website pad-top-60 pad-bot-200">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12 col-sm-12 order-lg-1">
          <div class="about-section3">
            <img src="{{URL::to('/public/website')}}/images/fit-gurantee.jpg" width="100%">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 col-sm-12">
          <div class="about-section2">
            <p class="no-margin news-font pad-bot-30">If you’re not completely satisfied with your first product, do not worry. Write into our Customer Care team who will ensure a pain free rectification process. After we’ve identified the issue, we will either alter your product or completely remake it free of cost.</p>
            <p class="no-margin news-font pad-bot-30">If you are a first time customer and ordering 3 or more products, we will compulsorily send you 1 product as a trial to confirm the fit. Once you’re happy, we will proceed with the rest of your order.</p>
            <p class="no-margin news-font pad-bot-30">If you’ve had your measurements taken by a tailor, these are usually Body Measurements. Since we accept only Shirt Measurements, please ensure that you add a breathing margin to all values to get your final size. We recommend 3-5″ around the chest, waist, and hips; 2-3″ around the biceps; and 2.5″ for the cuffs.</p>
          </div>
        </div>
      </div> 
    </div> 
  </section>
<!-- section1 close -->

@endsection