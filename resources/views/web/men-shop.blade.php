@extends('web.includes.master2')
@section('title', 'Men Shop Page')
@section('content')

<!-- section heading -->
	<section class="container-fluid pad-right-80 pad-left-80 pad-top-100">
	    <div class="men-shop-section1">
	      <h1 class="abril-font">MEN'S COLLECTION</h1>
	    </div>    
  </section>
<!-- section heading close -->

<!-- section1 start -->
  <section class="container-fluid pad-left-80 pad-right-80 pad-top-70 pad-bot-200">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">        
        <div class="men-shop-section2">
          <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">Sort By Latest </button><i class="fa fa-chevron-down"></i>
          <div id="myDropdown" class="dropdown-content">
            <a href="#home">Sort By Latest</a>
            <a href="#about">Sort By Price : Low To High</a>
            <a href="#contact">Sort By Price : High To Low</a>
          </div>
        </div>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item waves-effect waves-light no-margin">
                  <a class="nav-link active"  id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">SHIRTS</a>
                </li>
                <li class="nav-item waves-effect waves-light no-margin bor-l">
                  <a class="nav-link" style="padding-left: 45px;" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">TROUSERS</a>
                </li>
                <li class="nav-item waves-effect waves-light no-margin bor-l">
                  <a class="nav-link" style="padding-left: 45px;" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">BLAZZERS</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <div class="row pad-top-90">
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>                    
                  </div>
                  <div class="row pad-top-50">
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>                    
                  </div> 
                </div>
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row pad-top-90">
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>                    
                  </div>
                  <div class="row pad-top-90">
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>                    
                  </div>                  
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="row pad-top-90">
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>                    
                  </div>
                  <div class="row pad-top-90">
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
                      </div>
                    </div>
                    <div class="col-md-3 pad-left-20 pad-right-20">
                      <div class="men-shop-product">
                        <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                        <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                        <h5 class="news-font no-margin">$1000/-</h5>                    
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