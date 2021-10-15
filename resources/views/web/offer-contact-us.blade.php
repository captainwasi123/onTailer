@extends('web.includes.master2')
@section('title', 'Offer Contact Us')
@section('content')

<!-- section1 start -->
<section class="container-fluid pad-left-80 pad-right-80 pad-top-100 pad-bot-200">
    <div class="row">
      <div class="col-md-7 col-md-7 col-12 col-sm-12" style="border-right: 1px solid #979595;">
        <div class="contact-section1">
            <section class="accordion-section" aria-label="Question Accordions">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading0">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                      <b style="color: black;">Offers, Discounts, Coupons</b>
                      </a>
                    </h3>
                  </div>
                </div>
              
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading1">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                      My coupon got locked
                      </a>
                    </h3>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                    <div class="panel-body px-3">
                      <div class="inner-panel-section pad-top-10">
                        <p class="news-font no-margin">A locked coupon will automatically be unlocked in 3 hours.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                     I am unable to apply coupon
                      </a>
                    </h3>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body px-3">
                      <div class="inner-panel-section pad-top-10">
                        <p class="news-font no-margin">You can apply a coupon on a cart page before you place an order.
The complete list of your unused and valid coupons is available under the 'My Account -> Coupons' section.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                     I did not receive complete discount
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

                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading4">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                     Other
                      </a>
                    </h3>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
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
  </section>
<!-- section1 close -->

<!-- section2 start -->
  <section class="container-fluid pad-left-80 pad-right-80 contact-bottom-sec">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 col-sm-12">
        <div class="contact-section2">
          <h2 class="no-margin pad-top-30 abril-font">CONTACT US VIA CALL</h2>
          <div class="row pad-top-20">
            <div class="col-lg-1 col-md-1 col-1 col-sm-1" style="padding-left: 22px;">
              <img src="{{URL::to('/public/website')}}/images/call.png">
            </div>
            <div class="col-lg-10 col-md-10 col-10 col-sm-10 no-pad">
              <p class="no-margin pad-bot-30 news-font">9009993919</p>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
<!-- section2 close -->

@endsection