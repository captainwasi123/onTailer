@extends('web.includes.master2')
@section('title', 'Payment Method')
@section('content')

<!-- section heading -->
  <section>
    <div class="container-fluid custom-gird-website pad-top-100">
      <div class="contact-section1">
        <h3 class="abril-font">PAYMENT OPTIONS</h3>
      </div>
    </div>    
  </section>
<!-- section close -->

<!-- section1 start -->
  <section>
    <div class="container-fluid custom-gird-website pad-bot-200">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 payment-method-head pad-top-60">
          <form action="#" method="post">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-12">
                <form>
                  <div class="payment-method-section">
                    <input type="radio" id="radio1" name="example2">
                    <label for="radio1" class="no-margin">
                      <img src="{{URL::to('/public/website')}}/images/payment-1.png">
                      <span class="news-font no-margin"> (PhonePe / Paytm / Google Pay)</span>
                    </label>
                    <div class="payment-method-section-inner pad-left-30 pad-top-30">
                      <label class="form-label payment-method-label news-font no-pad" for="inputEmail">CHOOSE AN OPTION</label>
                      <div class="payment-method-section">
                        <input type="radio" id="radio3" name="example2">
                        <label for="radio3"> <span class="news-font no-margin no-pad">PhonePe</span></label>
                        <br>
                        <input type="radio" id="radio4" name="example2">
                        <label for="radio4"> <span class="news-font no-margin no-pad">UPI ID</span></label>
                        <br>
                        <div class="pad-left-30 payment-method-section-inner1">
                          <input type="text" name="" class="payment-method-section-input" placeholder="Enter UPI ID">
                          <span class="no-margin news-font">VERIFY</span>
                          <input type="submit" class="payment-method-section-btn news-font m-l-30" name="" value="PAY $1000">
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="payment-method-section">                
                    <input type="radio" id="radio2" name="example2">
                    <label for="radio2" class="no-margin">
                      <img src="{{URL::to('/public/website')}}/images/payment-2.png">
                      <img src="{{URL::to('/public/website')}}/images/payment-3.png" class="pad-left-10">
                      <span class="news-font no-margin"> (Debit / Credit Card)</span>
                    </label>
                  </div>              
                  <br>
                  <div class="payment-method-section">                
                    <input type="radio" id="radio3" name="example2">
                    <label for="radio3"> <span class="news-font no-margin no-pad">Net Banking</span></label>  
                  </div>
                </form>                      
              </div>              
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- section1 close -->

@endsection