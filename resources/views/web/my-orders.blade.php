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
              <div class="col-lg-1 col-md-3 col-sm-1 ">
                <img src="{{URL::to('/public/website')}}/images/order-1.png">
              </div>
              <div class="col-lg-7 col-md-5 col-sm-6 col-xs-4 no-pad">
                <div class="measurement-section-3">
                  <h3 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h3>
                  <h4 class="no-margin news-font">Cotton</h4>
                  <h2 class="news-font no-margin"><b>₹ 1000/-</b></h2>
                </div>                
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="measurement-btn">
                  <button type="button" class="btn order-btn1 news-font m-b-20 order-drop-view" onclick="orderDropdown()">VIEW ORDER DETAILS</button>
                  <div id="order-drop" class="order-drop order-drop-view-content">
                    <a href="#" class="roboto-font">View Selected Customization</a>
                    <a href="#">View Measurements</a>
                  </div>
                  <button type="button" class="btn order-btn2 news-font">TRACK ORDER STATUS</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 pad-top-30">
          <div class="measurement-section2 pad-top-20 pad-bot-20 pad-left-20 pad-right-20">
            <div class="row">
              <div class="col-lg-1 col-md-3 col-sm-1 ">
                <img src="{{URL::to('/public/website')}}/images/order-1.png">
              </div>
              <div class="col-lg-7 col-md-5 col-sm-6 col-xs-4 no-pad">
                <div class="measurement-section-3">
                  <h3 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h3>
                  <h4 class="no-margin news-font">Cotton</h4>
                  <h2 class="news-font no-margin"><b>₹ 1000/-</b></h2>
                </div>                
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="measurement-btn">
                  <button type="button" class="btn order-btn1 news-font m-b-20 order-drop-view" onclick="orderDropdown()">VIEW ORDER DETAILS</button>
                  <div id="order-drop" class="order-drop order-drop-view-content">
                    <a href="#" class="roboto-font">View Selected Customization</a>
                    <a href="#">View Measurements</a>
                  </div>
                  <button type="button" class="btn order-btn2 news-font">TRACK ORDER STATUS</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div> 
  </section>
<!-- section1 close -->

<script>
function orderDropdown() {
  document.getElementById("order-drop").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.order-drop-view')) {
    var dropdowns = document.getElementsByClassName("order-drop-view-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
@endsection