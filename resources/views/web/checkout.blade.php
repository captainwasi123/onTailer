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
</style>
<!-- section1 start -->
  <section>
    <div class="container-fluid custom-gird-website pad-bot-200">
      <div class="row">
        <div class="col-md-12">
          <div class="checkout-section">
            <form action="#" method="post">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <label class="form-label personal-info-label abril-font" for="inputEmail">NAME</label>
                    </div>
                    <div class="col-md-6">
                      <input type="email" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="First Name" required>
                    </div>
                    <div class="col-md-6">
                      <input type="email" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="First Name" required>
                    </div>
                  </div>                                  
                </div>
                <!-- <div class="col-lg-2 col-md-1 tablet-none"></div>
                <div class="col-lg-5 col-md-6">
                  <div>
                    <input type="email" class="form-control p-form-style1 m-t-80" id="inputEmail" placeholder="Last Name" required>
                  </div>                
                </div>
                <style type="text/css">
           
                </style> -->
                <div class="col-lg-5 col-md-6 col-6 m-t-50">
                  <div>
                    <label class="form-label personal-info-label abril-font" for="inputEmail">YOUR GENDER</label>
                    <!-- <input type="email" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="First Name" required> -->
                    <div style="display: block; width: 100%;">
                      <label class="radio-inline ">
                      <input type="radio" name="optradio" checked> <span>Male</span>
                    </label>
                    <label class="radio-inline" style="padding-left: 50px;">
                      <input type="radio" name="optradio"><span>Female</span>
                    </label>
                    </div>
                    
                  </div>                
                </div>
                <div class="col-lg-2 col-md-1"></div>
                <div class="col-md-5"></div>

                <div class="col-lg-5 col-md-6 m-t-50">
                  <div>
                    <label class="form-label personal-info-label abril-font" for="inputEmail">EMAIL</label>
                    <label class="form-label personal-info-edit news-font" for="inputEmail" style="float: right;"><a href="">&nbsp;&nbsp;|&nbsp;&nbsp;Change Password</a></label>
                    <label class="form-label personal-info-edit news-font" for="inputEmail" style="float: right;"><a href="">Edit </a></label>
                    <input type="email" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Email" required>
                  </div>                
                </div>
                <div class="col-md-2 tablet-none"></div>

                <div class="col-lg-5 col-md-6 m-t-50">
                  <div>
                    <label class="form-label personal-info-label abril-font" for="inputEmail">MOBILE NUMBER</label>
                    <label class="form-label personal-info-edit news-font" for="inputEmail" style="float: right;"><a href="">Edit </a></label>
                    <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Mobile Number" required>
                  </div>               
                </div>

                <div class="col-lg-5 col-md-6 m-t-50">
                  <div>
                    <label class="form-label personal-info-label abril-font" for="inputEmail">ADDRESS</label>
                    <label class="form-label personal-info-edit news-font" for="inputEmail" style="float: right;"><a href="">Edit </a></label>
                    <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Address" required>
                    <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="City" required>
                    <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Pincode" required>
                  </div>                
                </div>
                  <div class="col-md-2 tablet-none"></div>
                  <div class="col-lg-5 col-md-6 m-t-80 cus-con">
                    <div>
                      <select class="form-control p-form-style1 m-t-50">
                        <option>Country</option>
                        <option>Pakistan</option>
                      </select>
                      <select  class="form-control p-form-style1 m-t-40">
                        <option>State</option>
                        <option>Pakistan</option>
                      </select>
                    </div>               
                  </div>
              <!-- </div> -->
                <div class="personal-btn-sec pad-top-100">
                  <button type="button" class="btn personal-btn1 news-font">SAVE</button>
                  <button type="button" class="btn personal-btn2 news-font">CANCEL</button>
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