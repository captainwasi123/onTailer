@extends('web.includes.master')
@section('title', 'Home')
@section('content')

<div id="fullpage">
  <div class="section slider1">
    <div class="container">

      <div class="slide1">
        
        <h2 class="no-margin pad-bot-20 trochut-font">VIEW COLLECTION</h2>
        <h3 class="news-font no-margin">CUSTOM TAILORED CLOTHING</h3>
        <button type="button" class="btn btn-primary btn1 m-t-30 news-font">SHOP WOMEN</button>
        <button type="button" class="btn btn-primary btn2 m-t-30 news-font">SHOP MEN</button>
      </div>       
    </div>
  </div>
  <div class="section slider2">
    <div class="container">
      <div class="slide2">

        <h2>we make it fit</h2>
        <h3>we make it personal</h3>
        <h4>we make it right</h4>
        <button type="button" class="btn btn-primary btn1">SHOP WOMEN</button>
        <button type="button" class="btn btn-primary btn2">SHOP MEN</button>
      </div>       
    </div>
  </div>
  <div class="section slider3">
    <div class="container">
      <div class="slide3">

        <div class="slide3-inner">
        <h2>True Personalization</h2>
        <h3>COLLECTION</h3>
        <hr>
        <div class="slide3-bottom">
          <h4>True Measurement</h4>
        <button type="button" class="btn btn-primary btn3">Shop Men</button>
        <button type="button" class="btn btn-primary btn4">Shop Women</button>
        </div>
        
        </div>
        
        
      </div>       
    </div>
  </div>
  <div class="section">
    <div class="slide4">
       <!--  <hr class="slide4-bottom"> -->
        <div class="container slide4-main">
          <div class="row">
       <div class="col-md-3">
        </div>
          <div class="col-md-1">
          <hr class="slide4-bor">
        </div>
        <div class="col-md-4">
          <div class="slide4-sec1">
            <h2>WE’VE SOMETHING FOR EVERYONE</h2>
          </div>
        
        </div>
        <div class="col-md-1">
          <hr class="slide4-bor">
        </div>
        <div class="col-md-3">
        </div>
          
      </div>
        </div>

        <div class="container-fluid">
          <div class="row">
       <div class="col-md-2">
        <div class="slide4-sec-2">
          <h3>MEN &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img src="{{URL::to('/public/website')}}/images/arrow-right.png"> </h3>
        </div>
        
        </div>
          <div class="col-md-10">
           <div class="seller-grid arrow-style2">
      <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-shirt.jpg"/>
          <h5> Books  </h5>
      </div>
      <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-kurtas.jpg"/>
          <h5> Books  </h5>
      </div><div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-jeans.jpg"/>
          <h5> Books  </h5>
      </div><div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-pyjamas.jpg"/>
          <h5> Books  </h5>
      </div><div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-blazer.jpg"/>
          <h5> Books  </h5>
      </div>  
      <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/men-trouser.jpg"/>
          <h5> Books  </h5>
      </div> 
   
    </div>
        </div>
          
      </div>
        </div>

         <div class="container-fluid">
          <div class="row">
       <div class="col-md-2">
        <div class="slide4-sec-2">
          <h3>WOMEN &nbsp; <img src="{{URL::to('/public/website')}}/images/arrow-right.png"> </h3>
        </div>
        
        </div>
          <div class="col-md-10">
           <div class="seller-grid arrow-style2">
      <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-shirts.jpg"/>
          <h5> Books  </h5>
      </div>
      <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-kurties.jpg"/>
          <h5> Books  </h5>
      </div><div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-dresses.jpg"/>
          <h5> Books  </h5>
      </div><div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-jeans.jpg"/>
          <h5> Books  </h5>
      </div><div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-palazzos.jpg"/>
          <h5> Books  </h5>
      </div>  
      <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-blazer.jpg"/>
          <h5> Books  </h5>
      </div>
      <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/women-trouser.jpg"/>
          <h5> Books  </h5>
      </div> 
   
    </div>
        </div>
          
      </div>
        </div>
    
        
      </div>
    </div>

    <div class="section slider5">
    <div class="container">
      <div class="slide5">

        <div class="slide5-inner">
        <h2>how it works</h2>
        <hr class="slide5-line">
        <h3><span class="numbers-list"> 1 </span>&nbsp;&nbsp;&nbsp;CHOOSE YOUR FABRIC</h3>
        <p>Fabrics are available in boundless varieties, with equally wide variations in quality.</p>
        <h3><span class="numbers-list"> 2 </span>&nbsp;&nbsp;&nbsp;STYLE IT IN YOUR WAY</h3>
        <p>We offer different types of styling options so you can design the perfect product for yourself.</p>
        <h3><span class="numbers-list"> 3 </span>&nbsp;&nbsp;&nbsp;MEASURE YOURSELF</h3>
        <p>Our AI technology calculates your body measurements in seconds. For the best fit we recommend that you create your own measurements profile, otherwise you can choose from standard sizes or manually input your measurement to checkout.</p>        
        </div>
        
        
      </div>       
    </div>
  </div>

      <div class="section slider6">
    <div class="container">
      <div class="slide6">

        <div class="slide6-inner">
        <h2>Fit Guarantee</h2>

        <p>As a new customer you can utilize our perfect fit guarantee, which means that if your dress is not entirely to your liking, we will help you adjust the measurements and send you a new one for free.</p>
        <button type="button" class="btn btn-primary btn5">CONTACT SUPPORT</button>
          <h4>True Measurement</h4>
        
        <button type="button" class="btn btn-primary btn6">CONTACT US</button>


        </div>
        
        
      </div>       
    </div>
  </div>

  <div class="section">
    <div class="slide4">
       <!--  <hr class="slide4-bottom"> -->
        <div class="container slide4-main">
          <div class="row">
  
        <div class="col-md-12">
          <div class="slide5-sec1">
            <div style="width: 39%;">
              <hr class="slide5-bor" style="float: right">
            </div>
            <div style="width: 22%;">
              <h2>OUR BEST SELLERS</h2>
            </div>
            <div style="width: 39%;">
              <hr class="slide5-bor" style="float: left">
            </div>
          
          </div>
        
        </div>

          
      </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
            </div>
          <div class="col-md-10">
           <div class="seller-grid1 arrow-style2">
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

      <div class="container slide4-main">
          <div class="row">
       <div class="col-md-3">
        </div>
          <div class="col-md-1">
          <hr class="slide4-bor">
        </div>
        <div class="col-md-4">
          <div class="slide4-sec1">
            <h2>NEW LAUNCH</h2>
          </div>
        
        </div>
        <div class="col-md-1">
          <hr class="slide4-bor">
        </div>
        <div class="col-md-3">
        </div>
          
      </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1">
            </div>
          <div class="col-md-11">
           <div class="seller-grid2 arrow-style2">
      <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
          <div class="seller-box-hover">
            <h2>your content here</h2>
          </div>
      </div>
      <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
          <div class="seller-box-hover">
            <h2>your content here</h2>
          </div>
      </div>
       <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
          <div class="seller-box-hover">
            <h2>your content here</h2>
          </div>
      </div>
       <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
          <div class="seller-box-hover">
            <h2>your content here</h2>
          </div>
      </div>
       <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
          <div class="seller-box-hover">
            <h2>your content here</h2>
          </div>
      </div>

       <div class="seller-box2">
          <img alt="product-image" src="{{URL::to('/public/website')}}/images/new-launch.jpg"/>
          <div class="seller-box-hover">
            <h2>your content here</h2>
          </div>
      </div>
  

    </div>
        </div>
          
      </div>
        </div>
        
      </div>
    </div>

    <div class="section">
    <div class="slide4">
        <!-- <hr class="slide4-bottom"> -->
        <div class="container slide4-main">
          <div class="row">
  
        <div class="col-md-12">
          <div class="slide8-sec1">
  
            <h2>JOIN OUR NEWSLETTER</h2>
            <form>
              <input type="email" name="" placeholder="Enter You Email">
            </form>
            <div class="slide8-sec1-bottom">
              <span>HOME</span><span>ABOUT US</span><span>FIT GUARANTEE</span><span>ALTERNATION & RETURN POLICY</span><span>SHIPPING POLICY</span><span>PRIVACY POLICY</span>     
            </div>

          </div>
        
        </div>

          
      </div>
        </div>

        
      </div>
    </div>
</div>
 <div id="fp-nav" class="fp-right">
          <ul>
            <li>
              <a href="#first" class=""><span class="fp-sr-only">fullPage</span><span></span></a><div class="fp-tooltip fp-right">fullPage</div>
            </li>
            <li>
              <a href="#second" class=""><span class="fp-sr-only">Open</span><span></span></a><div class="fp-tooltip fp-right">Open</div></li>
            <li><a href="#third"><span class="fp-sr-only">Easy</span><span></span></a><div class="fp-tooltip fp-right">Easy</div></li>
            <li><a href="#fourth"><span class="fp-sr-only">Touch</span><span></span></a><div class="fp-tooltip fp-right">Touch</div></li>
            <li><a href="#fifth"><span class="fp-sr-only">Touch</span><span></span></a><div class="fp-tooltip fp-right">Touch</div></li>
            <li><a href="#six"><span class="fp-sr-only">Touch</span><span></span></a><div class="fp-tooltip fp-right">Touch</div></li>
            <li><a href="#seven"><span class="fp-sr-only">Touch</span><span></span></a><div class="fp-tooltip fp-right">Touch</div></li>
            <li><a href="#eight"><span class="fp-sr-only">Touch</span><span></span></a><div class="fp-tooltip fp-right">Touch</div></li>

          </ul>
        </div>
        @endsection