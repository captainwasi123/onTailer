@extends('web.includes.master2')
@section('title', 'Order Cancel Tracking')
@section('content')

<!-- section1 start -->
<section>
  <div class="container-fluid custom-gird-website pad-top-100 pad-bot-200">
    <div class="row">
      <div class="col-lg-12 col-md-7 col-12 col-sm-12 order-tracking" style="border: 1px solid #D9D7D7;">
        <div class="row">
          <div class="col-lg-1 col-md-7 col-12 col-sm-12">
            <img src="{{URL::to('/public/website')}}/images/order-1.png">      
          </div>
          <div class="col-lg-2 col-md-7 col-12 col-sm-12">
            <div class="cancel-order-section2">
              <h2 class="no-margin news-font">SLIM FIT STRIPED COMFORT SHIRT</h2>
              <h3 class="no-margin news-font">Cotton</h3>
              <h4>₹ 1000</h4>
            </div>
          </div>
          <div class="col-lg-9 col-md-7 col-12 col-sm-12">
            <div class="card card-timeline">
              <ul class="bs4-order-tracking">
                <li class="step active">
                  <span class="news-font">Ordered</span>
                  <div class="m-t-20 m-b-20">&nbsp;</div>
                  <span class="news-font"> Fri, 23rd Oct</span>
                </li>
                <li class="step active">
                  <span class="news-font">Tailoring has Begun</span>
                  <div class="m-t-20 m-b-20">&nbsp;</div>
                  <span class="news-font"> Web, 28th Oct</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-7 col-12 col-sm-12">
          </div>                    
        </div>        
      </div>
    </div>
  </div>
</section>
<!-- section1 close -->

@endsection