@extends('web.includes.master2')
@section('title', 'Manage Contact Us')
@section('content')

<!-- section1 start -->
 <section>
  <div class="container-fluid custom-gird-website pad-top-100 pad-bot-200">
    <div class="row">
      <div class="col-md-7 col-md-7 col-12 col-sm-12" style="border-right: 1px solid #979595;">
        <div class="contact-section1">
            <section class="accordion-section" aria-label="Question Accordions">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading0">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                      <b style="color: black;">MANAGE YOUR ACCOUNT</b>
                      </a>
                    </h3>
                  </div>
                </div>
              
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading1">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                      I am unable to login to my account
                      </a>
                    </h3>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                    <div class="panel-body px-3">
                      <div class="inner-panel-section pad-top-10">
                        <p class="news-font no-margin">You can recover your password using the 'Forgot Password' link in the login page. If you are still unable to access your account, then please call our customer care.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                     I want to unsubscribe from promotional emails and SMS
                      </a>
                    </h3>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body px-3">
                      <div class="inner-panel-section pad-top-10">
                        <p class="news-font no-margin">To unsubscribe from promotional SMSes please email us.</p>
                        <p class="news-font no-margin">To unsubscribe from promotional emails please click on unsubscribe link on the emails you have received.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                     Something is wrong with my wishlist
                      </a>
                    </h3>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body px-3">
                      <div class="inner-panel-section pad-top-10">
                        <p class="news-font no-margin">Sorry! We are not able to recommend a solution. Please get in touch using the "Contact Us" option below.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </div>
      </div>
      <div class="col-md-5 col-md-5 col-12 col-sm-12">
        <div class="contact-us-form">
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