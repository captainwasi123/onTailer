@extends('web.includes.master2')
@section('title', 'Alteration & Return Policy')
@section('content')

<!-- section heading -->
	  <section>
      <section class="container-fluid custom-gird-website pad-top-100">
  	    <div class="about-section1">
  	      <h1 class="abril-font no-margin">ALTERATIONS & RETURNS POLICY</h1>
  	    </div>
      </div>    
  	</section>
<!-- section heading close -->

<!-- section1 start -->
  <section>
    <div class="container-fluid custom-gird-website pad-top-60 pad-bot-200 alterpage">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12 col-sm-12">
          <div class="about-section3">
            <img src="{{URL::to('/public/website')}}/images/return-policy.jpg" width="100%">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 col-sm-12 ">
          <div class="alterpage-section2 pad-top-50 pad-left-40 pad-right-30 news-font">
            <p class="no-margin">At ontailors we want to keep things simple and worry-free for you.</p>
            <p class="no-margin pad-bot-20">You can shop with confidence with the following assurances:</p>
            <ul class="no-margin">
              <li class="no-margin pad-bot-20">Within 45 days of your shipment reaching you: Should you find your product not up to your expectations, you may return it for an alteration or remake as necessary, or a full refund.</li>
              <li class="no-margin pad-bot-20">Beyond 45 days of your shipment reaching you: We will be happy to make measurement alterations at no cost to you. This is provided there is no replacement or change in fabric. We will try to accommodate other changes as well, but will advise you of any associated costs before we accept your request.</li>
            </ul>
            <p class="no-margin">Contact our Customer Support team. They will be happy to arrange a pick up.</p>
        	  <p class="no-margin">All alterations take 5 working days to process, though we will try to get to you sooner.</p>
          </div>
        </div>
      </div> 
    </div> 
  </section>
<!-- section1 close -->

@endsection