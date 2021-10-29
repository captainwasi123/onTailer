@extends('web.includes.master2')
@section('title', 'Cancel Order')
@section('content')

<!-- section1 start -->
<section>
  <div class="container-fluid custom-gird-website pad-top-100 pad-bot-200">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12 order-tracking" style="border: 1px solid #D9D7D7;">
        <div class="row">
          <div class="col-lg-1 col-md-3 col-5 col-sm-12">
            <img src="{{URL::to('/public/website')}}/images/order-1.png">      
          </div>
          <div class="col-lg-2 col-md-7 col-7 col-sm-12">
            <div class="cancel-order-section2">
              <h2 class="no-margin news-font">SLIM FIT STRIPED COMFORT SHIRT</h2>
              <h3 class="no-margin news-font">Cotton</h3>
              <h4>₹ 1000</h4>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 col-12 col-sm-12">
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
                <li class="step ">
                  <span class="news-font">Tailoring is Done</span>
                  <div class="m-t-20 m-b-20">&nbsp;</div>
                  <span class="news-font"> Web, 28th Oct</span>
                </li>
                <li class="step ">
                  <span class="news-font">Shipped</span>
                  <div class="m-t-20 m-b-20">&nbsp;</div>
                  <span class="news-font"> Web, 28th Oct</span>
                </li>
                <li class="step ">
                  <span class="news-font ">Delivery</span>
                  <div class="m-t-20 m-b-20">&nbsp;</div>
                  <span class="news-font" style="line-height: 18px; color: black;"> Delivery Expected By Nov 5</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-12 col-12 col-sm-12">
            <div class="order-tracking-section">
              <h2 class="no-margin news-font pad-bot-10"><img src="{{URL::to('/public/website')}}/images/green-dot.png"> &nbsp;Delivery expected by nov 5</h2>
              <a class="order-tracking-btn news-font"><i class="fa fa-file-pdf-o"></i> DOWNLOAD INVOICE</a>
              <a class="order-tracking-btn1 news-font m-t-20">CANCEL ORDER</a>
            </div>
          </div>                    
        </div>        
      </div>
    </div>
  </div>
</section>
<!-- section1 close -->

@endsection