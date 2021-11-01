@extends('web.includes.master2')
@section('title', 'My Orders')
@section('content')

<!-- section heading -->
  <section>
    <div class="container-fluid custom-gird-website pad-top-100">
      <div class="about-section1 pad-bot-40">
        <h1 class="abril-font no-margin">MY ORDERS</h1>
      </div>
    </div>    
  </section>
<!-- section heading close -->

<!-- section1 start -->
  <section>
    <div class="container-fluid custom-gird-website pad-bot-200">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="measurement-section2 pad-top-20 pad-bot-20 pad-left-20 pad-right-20">
            <div class="row">
              <div class="col-lg-1 col-md-3 col-sm-1 col-4 ">
                <img src="{{URL::to('/public/website')}}/images/order-1.png">
              </div>
              <div class="col-lg-7 col-md-5 col-sm-6 col-8 col-xs-4 no-pad">
                <div class="measurement-section-3">
                  <h3 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h3>
                  <h4 class="no-margin news-font">Cotton</h4>
                  <h2 class="news-font no-margin"><b>₹ 1000/-</b></h2>
                </div>                
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="measurement-btn">
                    <div class="dropdown drop-menu-measure">
                      <button class="btn dropdown-toggle order-btn1 news-font m-b-20" type="button" data-toggle="dropdown">VIEW ORDER DETAILS</button>
                      <div class="dropdown-menu order-drop order-drop-view-content">
                        <a href="#">View Selected Customization</a>
                        <a href="#">View Measurements</a>
                      </div>
                    </div>
                    <div>
                      <button type="button" class="btn order-btn2 news-font">TRACK ORDER STATUS</button>
                    </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <div class="col-lg-12 col-md-12 col-sm-12 pad-top-30">
          <div class="measurement-section2 pad-top-20 pad-bot-20 pad-left-20 pad-right-20">
            <div class="row">
              <div class="col-lg-1 col-md-3 col-sm-1 col-4 ">
                <img src="{{URL::to('/public/website')}}/images/order-1.png">
              </div>
              <div class="col-lg-7 col-md-5 col-sm-6 col-8 col-xs-4 no-pad">
                <div class="measurement-section-3">
                  <h3 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h3>
                  <h4 class="no-margin news-font">Cotton</h4>
                  <h2 class="news-font no-margin"><b>₹ 1000/-</b></h2>
                </div>                
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="measurement-btn">
                    <div class="dropdown drop-menu-measure">
                      <button class="btn dropdown-toggle order-btn1 news-font m-b-20" type="button" data-toggle="dropdown">VIEW ORDER DETAILS</button>
                      <div class="dropdown-menu order-drop order-drop-view-content">
                        <a href="#">View Selected Customization</a>
                        <a href="#">View Measurements</a>
                      </div>
                    </div>
                    <div>
                      <button type="button" class="btn order-btn2 news-font">TRACK ORDER STATUS</button>
                    </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div> 
  </section>
<!-- section1 close -->

@endsection