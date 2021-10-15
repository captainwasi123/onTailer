@extends('web.includes.master2')
@section('title', 'Payment Contact Us')
@section('content')

<!-- section1 start -->
<section class="container-fluid pad-left-80 pad-right-80 pad-top-100 pad-bot-200">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 col-sm-12" style="border-right: 1px solid #979595;">
        <div class="contact-section1">
            <section class="accordion-section" aria-label="Question Accordions">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading0">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                      <b style="color: black;">Payment/Refund</b>
                      </a>
                    </h3>
                  </div>
                </div>
              
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading1">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                      My return was picked up but I haven't received my refund yet
                      </a>
                    </h3>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                    <div class="panel-body px-3">
                      <div class="inner-panel-section pad-top-10">
                        <p class="news-font no-margin">Refund will be initiated after we receive the item and it passes the quality check.</p>
                        <p class="news-font no-margin">Refund time depends on the mode of refund:</p>
                        <h4 class="news-font no-margin">Bank Account:</h4>
                        <p class="news-font no-margin">Time the item takes to reach us + 1 to 3 business days.</p>
                        <h4 class="news-font no-margin">Online Refund:</h4>
                        <p class="news-font no-margin">Time the item takes to reach us + 7 to 10 business days.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">My payment has been debited multiple times</a>
                    </h3>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body px-3">
                      <div class="inner-panel-section pad-top-10">
                        <p class="news-font no-margin">If you have received Email/Sms from us regarding refund processing, Please send us the following details to process your refund as the earlier bank account details which were shared by you might be incorrect:</p>
                        <p class="news-font no-margin">Account Holder's Name</p>
                        <p class="news-font no-margin">Bank Name</p>
                        <p class="news-font no-margin">Bank Account Number</p>
                        <p class="news-font no-margin">Type of Account (Savings/Current)</p>
                        <p class="news-font no-margin">IFSC Code (Can be found on your bank cheque leaf)</p>
                        <p class="news-font no-margin">Account Holder's Name</p>
                        <p class="news-font no-margin">Please tap on Contact-Us and choose Email option to send us the details. Once we receive the above details, the refund request will be initiated within 1-3 business days. The amount will reflect in your bank account within 1 business day from the time the request has been processed.​</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                     I self shipped my return but haven't received my refund yet
                      </a>
                    </h3>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body px-3">
                      <div class="inner-panel-section pad-top-10">
                        <p class="news-font no-margin">Refund will be initiated after we receive the item at our warehouse and it passes the quality check. Please check the whether this item has been received at our warehouse by using the tracking number provided in the courier receipt on the courier partner website.</p>
                        <p class="news-font no-margin">Refund time depends on the mode of refund:</p>
                        <h4 class="news-font no-margin">Bank Account:</h4>
                        <p class="news-font no-margin">Time the item takes to reach us + 1 to 3 business days.</p>
                        <h4 class="news-font no-margin">Online Refund:</h4>
                        <p class="news-font no-margin">Time the item takes to reach us + 7 to 10 business days.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading4">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                     I self shipped my return but haven't received my refund yet
                      </a>
                    </h3>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body px-3">
                      <div class="inner-panel-section pad-top-10">
                        <p class="news-font no-margin">We are sorry that your order didn’t go through successfully but you need not worry at all. The amount debited from your bank/card account will be automatically refunded.</p>
                        <p class="news-font no-margin">Refund time depends on the mode of payment:</p>
                        <h4 class="news-font no-margin">Online Refund:</h4>
                        <p class="news-font no-margin">7 to 10 business days.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12 col-sm-12">
        <div class="contact-us-form">
          <h2 class="abril-font pad-top-20 pad-bot-20">WRITE TO US</h2>
          <form>
            <input type="text" class="news-font m-t-60" name="" placeholder="Enter your order id">
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