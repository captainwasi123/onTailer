@extends('web.includes.master2')
@section('title', 'Men Shop Page')
@section('content')

<!-- section1 start -->
 <section>
  <div class="container-fluid pad-top-100 custom-gird-website">
    <div class="men-shop-section1">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-12 col-sm-12">
          <div class="xzoom-container">            
            <img class="xzoom order-lg-1" id="xzoom-default" src="{{URL::to('/public/website')}}/images/single-shop.jpg" xoriginal="{{URL::to('/public/website')}}/images/single-shop2.jpg" />
            <div class="xzoom-thumbs xzoom-thumbs-all">
              <a href="{{URL::to('/public/website')}}/images/single-shop2.jpg"><img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/single-shop2.jpg"  xpreview="images/single-shop.jpg"></a>
              <a href="{{URL::to('/public/website')}}/images/single-shop2.jpg"><img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/single-shop.jpg" ></a>
              <a href="{{URL::to('/public/website')}}/images/single-shop2.jpg"><img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/single-shop.jpg" ></a>
              <a href="{{URL::to('/public/website')}}/images/single-shop2.jpg"><img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/single-shop.jpg" ></a>
            </div>
            <i class="fa fa-search"></i>          
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-12 col-sm-12 pad-left-40">
          <div class="men-shop-section1 pad-top-90">
            <h4 class="news-font">Shirts</h4>
            <h2 class="abril-font">SLIM FIT STRIPED COMFORT SHIRT</h2>
            <h3 class="news-font">$ 1000/-</h3>
            <p class="news-font pad-top-10 pad-bot-20">Shirt made from stretch fabric with high elasticity and comfort. This fabric is treated to repel stains and odours.</p>
            <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <div class="pad-top-60">
              <button class="btn m-b-30 men-shop-section1-btn"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;ADD TO CART</button>
              <button class="btn men-shop-section1-btn"><i class="fa fa-edit"></i>&nbsp;&nbsp;CUSTOMIZE</button>              
            </div>
          </div>        
      </div>                
    </div>    
  </div>
  </div>
</section>    
<!-- section1 close -->

<!-- section2 start -->
  <section>
    <div class="container-fluid pad-top-130">
      <div class="men-shop-section1">
        <h1 class="abril-font">EXCLUSIVE AND EXQUISITE COLLECTION</h1>
      </div>
    </div>    
  </section>
<!-- section2 close --> 

<!-- section3 start -->
  <section>
    <div class="container-fluid custom-gird-website pad-top-70 pad-bot-150">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">        
          <div class="men-shop-section2">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-12 col-sm-12 pad-left-20 pad-right-20">
                <div class="men-shop-product">
                  <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                  <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                  <h5 class="news-font no-margin">$1000/-</h5>                    
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-12 col-sm-12 pad-left-20 pad-right-20">
                <div class="men-shop-product">
                  <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                  <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                  <h5 class="news-font no-margin">$1000/-</h5>                    
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-12 col-sm-12 pad-left-20 pad-right-20">
                <div class="men-shop-product">
                  <img src="{{URL::to('/public/website')}}/images/men-shop-1.jpg" width="100%">
                  <h4 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h4>
                  <h5 class="news-font no-margin">$1000/-</h5>                    
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-12 col-sm-12 pad-left-20 pad-right-20">
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
  </section>
<!-- section3 end -->

@endsection