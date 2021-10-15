@extends('web.includes.master2')
@section('title', 'About Us')
@section('content')

<!-- section heading -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-top-100">
    <div class="about-section1 ">
      <h1 class="abril-font no-margin">FOCUS ON DESIGN</h1>
      <p class="no-margin news-font pad-top-10">We help you channel your individuality, by providing design options that are curated to reflect the latest sartorial trends. We are constantly innovating with fabrics and refining designs to ensure the perfect blend of contemporary design and classic tailoring. Our commitment to design extends to all areas of the company – our retail stores, digital touchpoints as well as the products and packaging themselves.</p>
    </div>    
  </section>
<!-- section heading close -->

<!-- section1 start -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-top-80">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 col-sm-12 order-lg-1">
        <div class="about-section3">
          <img src="{{URL::to('/public/website')}}/images/about1.jpg" width="100%">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12 col-sm-12 ">
        <div class="about-section2 pad-right-60 pad-top-50">
          <h2 class="abril-font no-margin pad-bot-20">Quality & exacting methods</h2>
          <p class="no-margin news-font pad-bot-50">The provenance is very important to us. We’ve curated a select group of fabric vendors from across the world. Only the finest raw materials are sourced. Every detail is scrutinized. Our manufacturing process involves only well defined processes. The perfect product is just a sum of its parts.</p>
          
          <h2 class="abril-font no-margin pad-bot-20">Don’t pay over the top</h2>
          <p class="no-margin news-font pad-bot-50">Custom-made shouldn’t necessarily mean expensive – by selling directly to customers, we cut out the middle men, and pass the savings on to you. Customise as little or as much as you want, there are no extra charges. We challenge the notion of ready-to-wear by pricing our shirts at a similar price point.</p>
        </div>
      </div>      
    </div>  
  </section>
<!-- section1 close -->
<!-- section2 start -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-top-100 pad-bot-200">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 col-sm-12">
        <div class="about-section4 pad-right-60">
          <img src="{{URL::to('/public/website')}}/images/about2.jpg" width="100%">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12 col-sm-12">
        <div class="about-section5 pad-top-50">
          <h2 class="abril-font no-margin pad-bot-20">Custom-made need not be complicated</h2>
          <p class="no-margin news-font pad-bot-50">It is our endeavour to simplify and de-mystify the process of shopping for custom-made products. We try to keep them fun and quirky, making it easy to understand. Our sizing process is also revolutionary.</p>
          
          <h2 class="abril-font no-margin pad-bot-20">Our focus is on you</h2>
          <p class="no-margin news-font pad-bot-50">We understand that shopping online, specifically for custom-made products can be daunting for some. That’s why we have a dedicated customer service team to help you out, no matter what your concern may be. We’re dedicated to you, our customer, and will go to great lengths to ensure that you are happy with product.</p>
        </div>
      </div>
    </div>  
  </section>
<!-- section2 close -->
@endsection