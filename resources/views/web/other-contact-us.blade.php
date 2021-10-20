@extends('web.includes.master2')
@section('title', 'Other Contact Us')
@section('content')

<!-- section1 start -->
<section>
  <div class="container-fluid custom-gird-website pad-top-100 pad-bot-200">
    <div class="row">
      <div class="col-md-7 col-md-7 col-12 col-sm-12">
        <div class="contact-section1">
            <section class="accordion-section" aria-label="Question Accordions">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading0">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                      <b style="color: black;">OTHER</b>
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
            </section>
        </div>
        <div class="contact-us-form m-t-80">
           	<h2 class="abril-font pad-top-20 pad-bot-20">WRITE TO US</h2>
	            <form>
	    	        <textarea rows="4" class="news-font m-t-20" cols="50" placeholder="Message"></textarea>
	                <input type="submit" name="" class="news-font m-t-50 m-b-50" value="SEND">
	            </form>        
        </div>
      </div>
    </div> 
  </div> 
</section>
<!-- section1 close -->

<!-- section2 start -->
  <section>
    <div class="container-fluid custom-gird-website contact-bottom-sec">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
          <div class="contact-section2">
            <h2 class="no-margin pad-top-30 abril-font">CONTACT US VIA CALL</h2>
            <div class="row pad-top-20">
              <div class="col-lg-1 col-md-1 col-2 col-sm-1" style="padding-left: 22px;">
                <img src="{{URL::to('/public/website')}}/images/call.png">
              </div>
              <div class="col-lg-10 col-md-10 col-10 col-sm-10 no-pad">
                <p class="no-margin pad-bot-30 news-font">9009993919</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
<!-- section2 close -->

@endsection