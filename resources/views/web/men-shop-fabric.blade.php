@extends('web.includes.master2')
@section('title', 'Measurement Profile')
@section('content')

<!-- section heading -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-top-100 pad-bot-100">
    <h3 class="no-margin" style="text-align: center;">
      <span class="measurement-head news-font pad-right-30">FABRIC</span>
      <span class="measurement-head1 news-font pad-left-30">CUSTOMIZE</span>
    </h3>   
  </section>
<!-- section heading close -->

<!-- section1 start -->
 <section class="container-fluid pad-left-80 pad-right-80 filter-section-1">
    <div class="row">
       	<div class="col-lg-6 col-md-6 col-12 col-sm-12">
       		<div class="men-shop-fabric-1">
       			<h2 class="abril-font no-margin"><i class="fa fa-bars"></i>FILTERS</h2>       			
       		</div>
       	</div>
       	<div class="col-lg-6 col-md-6 col-12 col-sm-12">
       		<div class="men-shop-fabric-2">
       			<h2 class="abril-font no-margin">SELECT FABRIC</h2>        			
       		</div>
       	</div>
    </div>
</section>
<style type="text/css">
	img#xzoom-default {
    width: 700px !important;
}
.xzoom-thumbs {
    display: inline-block !important;
    margin: 0px 30px 20px 0px !important;
    align-content: left !important;
        width: 40%;
}
.xzoom-gallery {
    border: none !important;
    width: 180px !important;
    height: auto !important;
}
</style>
<!-- section1 start -->
 <section class="container-fluid pad-top-100 pad-left-80 pad-right-80">
    <div class="men-shop-section1">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-12 col-sm-12">
          <div class="xzoom-container">            
            <img class="xzoom order-lg-1" id="xzoom-default" src="{{URL::to('/public/website')}}/images/single-shop.jpg" xoriginal="{{URL::to('/public/website')}}/images/single-shop2.jpg" />
            <div class="xzoom-thumbs">
              <a href="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg" xpreview="images/fabric.jpg">
              	<div>
              		<h3>CROWLEY</h3>
              		<h3>CROWLEY</h3>
              	</div>
              </a>
              <a href="{{URL::to('/public/website')}}/images/fabric.jpg"><img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg"  xpreview="images/fabric.jpg"></a>
              <a href="{{URL::to('/public/website')}}/images/single-shop2.jpg"><img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/single-shop.jpg" ></a>
              <a href="{{URL::to('/public/website')}}/images/single-shop2.jpg"><img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/single-shop.jpg" ></a>
              <a href="{{URL::to('/public/website')}}/images/single-shop2.jpg"><img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/single-shop.jpg" ></a>
              <a href="{{URL::to('/public/website')}}/images/single-shop2.jpg"><img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/single-shop.jpg" ></a>
              <a href="{{URL::to('/public/website')}}/images/single-shop2.jpg"><img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/single-shop.jpg" ></a>
              <a href="{{URL::to('/public/website')}}/images/single-shop2.jpg"><img class="xzoom-gallery" width="80" src="{{URL::to('/public/website')}}/images/single-shop.jpg" ></a>

            </div>
            <i class="fa fa-search"></i>          
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12 col-sm-12 pad-left-40">
          <div class="men-shop-section1 pad-top-90">
            <!-- <h4 class="news-font">Shirts</h4> -->
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
</section>    
<!-- section1 close -->

@endsection