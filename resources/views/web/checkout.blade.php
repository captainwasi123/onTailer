@extends('web.includes.master2')
@section('title', 'Checkout')
@section('content')

<!-- section heading -->
  <section>
    <div class="container-fluid custom-gird-website pad-top-100">
      <div class="about-section1">
        <h1 class="abril-font no-margin">CHECKOUT</h1>
      </div>
    </div>    
  </section>
<!-- section close -->
<style type="text/css">
  .checkout-section {
    padding: 80px 0px;
}
.shipping-info-label
{
  font-weight: bold;
  font-size: 25px;
  line-height: 41px;
}
.shipping-info-content {
    border: 1px solid #000000;
    padding: 15px 5px;
}
.shipping-info-content1 {
    border: 1px solid #000000;
    /*padding: 15px 5px;*/
}
.shipping-info-content1 a {
    background: #F0F0F0;
    width: 100%;
    padding: 14px 0px;
}
.discount-btn
{
  font-weight: bold;
font-size: 25px;
line-height: 41px;
}
.shipping-total h2 {
    font-weight: bold;
    font-size: 25px;
    line-height: 41px;
}
.shipping-total h3 {
  font-size: 25px;
  line-height: 41px;
}

.shipping-total h4 {
  font-size: 20px;
  line-height: 40px;
  letter-spacing: 0.05em;
  text-align: right;
}
.shipping-total span {
font-size: 14.5px;
line-height: 24px;
}
.shipping-dash
{
   border-top:1px dashed black;
}
.checkout-btn
{
  font-weight: bold;
    font-size: 20px;
    line-height: 33px;
    text-align: center;
    letter-spacing: 0.02em;
    border-radius: 0px;
    border: 2px solid #000000;
    padding: 4px 0px;
    width: 100%;
}
</style>
<!-- section1 start -->
  <section>
    <div class="container-fluid custom-gird-website pad-bot-200">
      <div class="row">
        <div class="col-md-12">
          <div class="checkout-section">
            <form action="#" method="post">
              <div class="row">
                <div class="col-lg-6 col-md-6 pad-right-80 bor-r">
                  <div class="row">
                    <div class="col-md-12">
                      <label class="form-label personal-info-label abril-font" for="inputEmail">NAME</label>
                    </div>
                    
                    <div class="col-md-6">
                      <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="First Name" required>
                    </div>
                    
                    <div class="col-md-6">
                      <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="First Name" required>
                    </div>
                    
                    <div class="col-md-12">
                      <label class="form-label personal-info-label abril-font pad-top-50" for="inputEmail">EMAIL</label>
                    <input type="email" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Email" required>
                    </div>
                    
                    <div class="col-md-12">
                      <label class="form-label personal-info-label abril-font pad-top-50" for="inputEmail">MOBILE NUMBER</label>
                      <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Mobile Number" required>
                    </div>
                    
                    <div class="col-md-12">
                      <label class="form-label personal-info-label abril-font pad-top-50" for="inputEmail">ADDRESS</label>
                      <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Address" required>
                    </div>

                    <div class="col-md-6">
                      <select class="form-control p-form-style1 m-t-50">
                        <option>Country</option>
                        <option>Pakistan</option>
                      </select>                      
                    </div>
                    
                    <div class="col-md-6">
                      <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="City" required>                      
                    </div>
                    
                    <div class="col-md-6">                      
                      <select  class="form-control p-form-style1 m-t-40">
                        <option>State</option>
                        <option>Pakistan</option>
                      </select>
                    </div>
                    
                    <div class="col-md-6">
                      <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Pincode" required>
                    </div>
                  </div>                                  
                </div>

                <div class="col-lg-6 col-md-6 pad-left-50">
                  <label class="form-label shipping-info-label news-font" for="inputEmail">SHIPPING METHOD</label>
                  <div class="shipping-info-content">
                    <img src="{{URL::to('/public/website')}}/images/checkout-shipping.png">
                  </div>

                  <label class="form-label shipping-info-label news-font pad-top-40" for="inputEmail">PAYMENT METHOD</label>
                  <div class="shipping-info-content">
                    <img src="{{URL::to('/public/website')}}/images/checkout-method.png">
                  </div>

                  <label class="form-label shipping-info-label news-font pad-top-40" for="inputEmail">PAYMENT METHOD</label>
                  <div class="shipping-info-content1">
                    <div class="row">
                      <div class="col-md-9">
                        <input type="text" style="border:none; padding-left: 20px; padding-top: 25px;" class="form-control p-form-style1 news-font" id="inputEmail" placeholder="Gift Voucher" required>       
                      </div>
                      <div class="col-md-3">
                         <a href="" class="btn news-font discount-btn">ADD</a>
                      </div>                      
                    </div>
                  </div>

                  <div class="shipping-total pad-top-30">
                    <h2 class="news-font no-margin">Total</h2>
                    <div class="row pad-top-20">
                      <div class="col-md-6"> 
                        <h3 class="news-font no-margin">Subtotal</h3>
                      </div>
                      <div class="col-md-6"> 
                        <h4 class="no-margin">$1000</h4>
                      </div>
                      <div class="col-md-6"> 
                        <h3 class="news-font no-margin">Delivery</h3>
                      </div>
                      <div class="col-md-6"> 
                        <h4 class="no-margin"><b>Free</b></h4>
                      </div>
                    </div>
                      <hr class="shipping-dash">
                    <div class="row">
                      <div class="col-md-6"> 
                        <h3 class="news-font no-margin">Amount To Pay</h3>
                      </div>
                      <div class="col-md-6"> 
                        <h4 class="no-margin">$1000</h4>
                      </div>
                      <div class="col-md-12 pad-top-50"> 
                        <input type="checkbox" name=""><span class="news-font"> I have read and accepted the terms and conditions.</span>
                      </div>
                    </div>
                  </div>

                  <div class="checkout-btn-sec pad-top-70">
                  <button type="button" class="btn checkout-btn news-font">Place Order</button>
                </div>
                </div>
                
              </div>              
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- section1 close -->

@endsection