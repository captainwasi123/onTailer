@extends('web.includes.master2')
@section('title', 'Contact Us')
@section('content')

<!-- section1 start -->
 <section class="container-fluid pad-left-80 pad-right-80 pad-top-100 pad-bot-200">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 col-sm-12">
        <div class="contact-section1">
          <h3 class="abril-font">SELECT YOUR ISSUE</h3>
            <section class="accordion-section" aria-label="Question Accordions">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading0">
                    <h3 class="panel-title">
                      <a href="#"  role="button" data-parent="#accordion"  aria-expanded="true" aria-controls="collapse0">
                      Payment/Refund
                      </a>
                    </h3>
                  </div>
                  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                  </div>
                </div>
              
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading1">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="true" aria-controls="collapse1">
                      Offers, Discounts, Coupons
                      </a>
                    </h3>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                      Manage Your Account
                      </a>
                    </h3>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                      Other
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
            </section>
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