@extends('web.includes.master')
@section('title', 'Home')
@section('content')

<!-- section1 start -->
<section id="fullpage">
  <!-- slider 1 start -->
  <div class="section slider1">
    <div class="container">
      <div class="slide1">
        <div class="slide1-mob">
          <h2 class="no-margin pad-bot-20 trochut-font">VIEW COLLECTION</h2>
          <h3 class="news-font no-margin">CUSTOM TAILORED CLOTHING</h3>
          <div class="m-t-30">
            <button type="button" class="btn slide1-btn1 news-font">SHOP WOMEN</button>
            <button type="button" class="btn slide1-btn2 news-font">SHOP MEN</button>
          </div>           
        </div>               
      </div>       
    </div>
  </div>
  <!-- slider 1 close -->

  <!-- slider 2 start -->
  <div class="section slider2">
    <div class="container">
      <div class="slide2">
        <h2 class="trochut-font no-margin pad-bot-20">WE MAKE IT FIT</h2>
        <h3 class="trochut-font no-margin ">WE MAKE IT PERSONAL</h3>
        <h4 class="trochut-font no-margin pad-top-10">WE MAKE IT RIGHT</h4>
        <div class="m-t-30 slide2-btn">
          <button type="button" class="btn slide1-btn1 news-font">SHOP WOMEN</button>
          <button type="button" class="btn slide1-btn2 news-font">SHOP MEN</button>
        </div>
      </div>       
    </div>
  </div>
  <!-- slider 2 close -->

  <!-- slider 3 start -->
  <div class="section slider3">
    <div class="container">
      <div class="slide3">
        <div class="slide3-inner">
          <h2 class="news-font pad-top-20">True Personalization</h2>
          <h3 class="abril-font no-margin">COLLECTION</h3>
          <hr>
          <div class="slide3-bottom">
            <h4 class="news-font pad-bot-20 no-margin">True Measurement</h4>
            <button type="button" class="btn slide3-bottom-btn1 m-b-10 cabin-font ">Shop Men</button>
            <button type="button" class="btn slide3-bottom-btn2 m-b-10 cabin-font ">Shop Women</button>
          </div>        
        </div>        
      </div>       
    </div>
  </div>
  <!-- slider 3 close -->

  <!-- slider 4 start -->
  <div class="section slider4 no-pad">
    <div class="container-fluid">
      <div class="slide4">
        <div class="slide4-1 pad-bot-40">
          <div class="row">
            <div class="col-md-3 mobile-hide"></div>
            <div class="col-md-1 mobile-hide"><hr class="slide4-bor"></div>
              <div class="col-md-4">
                <div class="slide4-sec1">
                  <h2 class="abril-font no-margin">WE’VE SOMETHING FOR EVERYONE</h2>
                </div>           
              </div>
              <div class="col-md-1 mobile-hide"><hr class="slide4-bor"></div>
              <div class="col-md-3 mobile-hide"></div>  
          </div>
        </div>
      <!-- </div>

      <div class="container-fluid"> -->
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 col-4">
            <div class="slide4-sec-2">
              <h3 class="trochut-font no-margin">MEN &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                <img src="{{URL::to('/public/website')}}/images/arrow-right.png" class="mobile-hide"> </h3>
            </div>        
          </div>
          <div class="col-md-10 col-lg-10 col-8 col-sm-10">
            <div class="seller-grid arrow-style2">
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-shirt.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div>
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-kurtas.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div>
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-jeans.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div>
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-pyjamas.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div>
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-blazer.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div>  
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-trouser.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div>
            </div>
          </div>          
        </div>
      <!-- </div>

      <div class="container-fluid"> -->
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 col-4">
            <div class="slide4-sec-2">
              <h3 class="trochut-font no-margin">WOMEN &nbsp; 
                <img src="{{URL::to('/public/website')}}/images/arrow-right.png" class="mobile-hide"></h3>
            </div>
          </div>
          <div class="col-md-10 col-lg-10 col-8 col-sm-10">
            <div class="seller-grid arrow-style2">
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-shirts.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div>
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-kurties.jpg"/>
                  <h5> Books  </h5>
              </div>
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-dresses.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div>
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-jeans.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div>
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-palazzos.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div>  
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-blazer.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div>
              <div class="seller-box2">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-trouser.jpg"/>
                  <h5 class="news-font no-margin"> Books </h5>
              </div> 
            </div>
          </div>  
        </div>
      </div>        
    </div>
  </div>

    <!-- slider 4 close -->

  <!-- slider 5 start -->
  <div class="section slider5">
    <div class="container">
      <div class="slide5">
        <h2 class="trochut-font no-margin">HOW IT WORKS</h2>
        <hr class="slide5-line">
        <h3 class="news-font no-margin">
          <span class="numbers-list news-font"> 1 </span>&nbsp;&nbsp;&nbsp;CHOOSE YOUR FABRIC</h3>
        <p class="no-margin news-font pad-top-10">Fabrics are available in boundless varieties, with equally wide variations in quality.</p>
        <h3 class="news-font no-margin">
          <span class="numbers-list news-font"> 2 </span>&nbsp;&nbsp;&nbsp;STYLE IT IN YOUR WAY</h3>
        <p class="no-margin news-font pad-top-10">We offer different types of styling options so you can design the perfect product for yourself.</p>
        <h3 class="news-font no-margin">
          <span class="numbers-list"> 3 </span>&nbsp;&nbsp;&nbsp;MEASURE YOURSELF</h3>
        <p class="no-margin news-font pad-top-10">Our AI technology calculates your body measurements in seconds. For the best fit we recommend that you create your own measurements profile, otherwise you can choose from standard sizes or manually input your measurement to checkout.</p>        
      </div>       
    </div>
  </div>
<!-- slider 5 close -->

 <!-- slider 6 start -->
  <div class="section slider6">
    <div class="container">
      <div class="slide6">      
        <h2 class="trochut-font no-margin">FIT GUARANTEE</h2>
        <p class="news-font no-margin">As a new customer you can utilize our perfect fit guarantee, which means that if your dress is not entirely to your liking, we will help you adjust the measurements and send you a new one for free.</p>
        <button type="button" class="btn btn-primary btn5 news-font">CONTACT SUPPORT</button>
        <h4 class="trochut-font">WE’RE WITH YOU ALL THE WAY</h4>        
        <button type="button" class="btn btn-primary btn6 news-font">CONTACT US</button>       
      </div>       
    </div>
  </div>
<!-- slider 6 close -->

 <!-- slider 7 start -->
  <div class="section slider7 no-pad">
    <div class="slide4">
      <div class="container slide4-main">
        <div class="slide7-1">
          <div class="row">
            <div class="col-md-3 col-1"></div>
              <div class="col-md-1 col-lg-1 col-2 no-pad"><hr class="slide4-bor"></div>
                <div class="col-md-4 col-lg-4 col-6 no-pad">
                  <div class="slide7-sec1">
                    <h2 class="abril-font no-margin">OUR BEST SELLERS</h2>
                  </div>           
                </div>
                <div class="col-md-1 col-lg-1 col-2 no-pad"><hr class="slide4-bor"></div>
                <div class="col-md-3 mobile-hide"></div>  
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-3"></div>
          <div class="col-md-10 col-9">
            <div class="seller-grid1 arrow-style2 no-margin">
              <div class="seller-box1">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/best-seller.png"/>
              </div>
              <div class="seller-box1">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/best-seller.png"/>
              </div>
              <div class="seller-box1">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/best-seller.png"/>
              </div>
              <div class="seller-box1">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/best-seller.png"/>
              </div>   
              <div class="seller-box1">
                  <img alt="product-image" src="{{URL::to('/public/website')}}/images/best-seller.png"/>
              </div>
            </div>
          </div>   
        </div>
      </div>

      <div class="container m-t-70">
        <div class="slide7-2">
          <div class="row">
            <div class="col-md-3 col-1"></div>
              <div class="col-md-1 col-lg-1 col-2 no-pad"><hr class="slide4-bor"></div>
                <div class="col-md-4 col-lg-4 col-6 no-pad">
                  <div class="slide7-sec1">
                    <h2 class="abril-font no-margin">NEW LAUNCH</h2>
                  </div>           
                </div>
                <div class="col-md-1 col-lg-1 col-2 no-pad"><hr class="slide4-bor"></div>
                <div class="col-md-3 mobile-hide"></div>  
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-11">
            <div class="seller-grid2 arrow-style2">
              <div class="seller-box2">
                <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
                <div class="seller-box-hover">
                  <h2 class="news-font">YOUR CONTENT HERE</h2>
                </div>
              </div>
              <div class="seller-box2">
                <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
                <div class="seller-box-hover">
                  <h2 class="news-font">YOUR CONTENT HERE</h2>
                </div>
              </div>
              <div class="seller-box2">
                <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
                <div class="seller-box-hover">
                  <h2 class="news-font">YOUR CONTENT HERE</h2>
                </div>
              </div>
              <div class="seller-box2">
                <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
                <div class="seller-box-hover">
                  <h2 class="news-font">YOUR CONTENT HERE</h2>
                </div>
              </div>
              <div class="seller-box2">
                <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
                <div class="seller-box-hover">
                  <h2 class="news-font">YOUR CONTENT HERE</h2>
                </div>
              </div>
              <div class="seller-box2">
                <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
                <div class="seller-box-hover">
                  <h2 class="news-font">YOUR CONTENT HERE</h2>
                </div>
              </div>
            </div>
          </div>   
        </div>
      </div>
    </div>
  </div>

  <div class="section no-pad">
    <div class="slide8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="slide8-sec1">
              <h2 class="abril-font no-margin">JOIN OUR NEWSLETTER</h2>
              <form class="pad-top-90">
                <input type="email" name="" class="news-input" placeholder="Enter You Email">
              </form>
              <div class="slide8-sec1-bottom">
                <a href="" class="news-font">HOME</a>
                <a href="" class="bor-l news-font">ABOUT US</a>
                <a href="" class="bor-l news-font">FIT GUARANTEE</a>
                <a href="" class="bor-l news-font">ALTERNATION & RETURN POLICY</a>
                <a href="" class="bor-l news-font">SHIPPING POLICY</a>
                <a href="" class="bor-l news-font">PRIVACY POLICY</a>        
              </div>
            </div>
          </div>         
        </div>
      </div>
    </div>
  </div>
</section>

  <div id="fp-nav" class="fp-right">
    <ul>
      <li class="active">
        <a href="#first" class=""><span class="fp-sr-only active">fullPage</span><span></span></a>
        <div class="fp-tooltip fp-right">fullPage</div>
      </li>
      <li>
        <a href="#second" class=""><span class="fp-sr-only active">Open</span><span></span></a>
        <div class="fp-tooltip fp-right">Open</div>
      </li>
      <li>
        <a href="#third"><span class="fp-sr-only">Easy</span><span></span></a>
        <div class="fp-tooltip fp-right">Easy</div>
      </li>
      <li>
        <a href="#fourth"><span class="fp-sr-only">Touch</span><span></span></a>
        <div class="fp-tooltip fp-right">Touch</div>
      </li>
      <li>
        <a href="#fifth"><span class="fp-sr-only">Touch</span><span></span></a>
        <div class="fp-tooltip fp-right">Touch</div>
      </li>
      <li>
        <a href="#six"><span class="fp-sr-only">Touch</span><span></span></a>
        <div class="fp-tooltip fp-right">Touch</div>
      </li>
      <li>
        <a href="#seven"><span class="fp-sr-only">Touch</span><span></span></a>
        <div class="fp-tooltip fp-right">Touch</div>
      </li>
      <li>
        <a href="#eight"><span class="fp-sr-only">Touch</span><span></span></a>
        <div class="fp-tooltip fp-right">Touch</div>
      </li>
    </ul>
  </div>

@endsection