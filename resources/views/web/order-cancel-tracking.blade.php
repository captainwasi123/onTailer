@extends('web.includes.master2')
@section('title', 'Order Cancel Tracking')
@section('content')
<style type="text/css">
.card-timeline h4 {
    font-size: 14.5px;
    line-height: 19px;
    letter-spacing: 0.05em;
}
.bs4-order-tracking li {
    list-style-type: none;
    font-size: 13px;
    width: 65%;
}
.bs4-order-tracking li:after {
    content: '';
    width: 100%;
}
.bs4-order-tracking li:first-child:after {
    left: 5%;
}
.bs4-order-tracking li>div {
    margin: 0px 25px;
}
.bs4-order-tracking li {
  text-align: left;
}
li.step span:nth-child(1)
{
  padding-left: 8px;
}
li.step:nth-child(2) {
  width: 100px;
}
.card-timeline hr {
    width: 73%;
}
@media screen and (max-width:992px) and (min-width:768px) { 
.bs4-order-tracking li:first-child:after {
    left: 12%;
}
.bs4-order-tracking {
    padding: 0px 0px;
}
.card-timeline h4 {
    width: 86%;
}
.card-timeline hr {
    width: 87%;
}

}
</style>
<!-- section1 start -->
<section>
  <div class="container-fluid custom-gird-website pad-top-100 pad-bot-200">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12 order-tracking" style="border: 1px solid #D9D7D7;">
        <div class="row">
          <div class="col-lg-1 col-md-2 col-12 col-sm-12">
            <img src="{{URL::to('/public/website')}}/images/order-1.png">      
          </div>
          <div class="col-lg-3 col-md-3 col-12 col-sm-12">
            <div class="cancel-order-section2">
              <h2 class="no-margin news-font">SLIM FIT STRIPED <br> COMFORT SHIRT</h2>
              <h3 class="no-margin news-font">Cotton</h3>
              <h4>₹ 1000</h4>
            </div>
          </div>
          <div class="col-lg-8 col-md-7 col-12 col-sm-12">
            <div class="card card-timeline">
              <ul class="bs4-order-tracking">
                <li class="step active">
                  <span class="news-font">Ordered</span>
                  <div class="m-t-20 m-b-20">&nbsp;</div>
                  <span class="news-font"> Fri, 23rd Oct</span>
                </li>
                <li class="step active">
                  <span class="news-font">Cancelled</span>
                  <div class="m-t-20 m-b-20">&nbsp;</div>
                  <span class="news-font"> Web, 28th Oct</span>
                </li>
              </ul>
              <hr>
            <h4 class="news-font">Your request is being processed. It may take up to 4 hours for your refund (if any)
to be initiated.</h4>
            </div>
          </div>                   
        </div>        
      </div>
    </div>
  </div>
</section>
<!-- section1 close -->

@endsection