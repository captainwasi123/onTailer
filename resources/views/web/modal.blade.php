@extends('web.includes.master2')
@section('title', 'Men Shop Customize')
@section('content')

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#login">Login</button>

  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog" style="max-width: 780px;">
      <div class="modal-content">        
        <div class="modal-body login-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-12" style="background: #044372;">
                <button type="button" class="close mobile" data-dismiss="modal">&times;</button>
                <div class="login-section1 pad-top-120">
                  <h2 class="abril-font pad-bot-50 no-margin">LOGIN</h2>
                  <img src="{{URL::to('/public/website')}}/images/login-page.png">
                  <h3 class="news-font pad-top-30">ACCESS YOUR ACCOUNT</h3>
                </div>                
              </div>
              <div class="col-lg-8 col-md-12 col-12">
                <button type="button" class="close desktop" data-dismiss="modal">&times;</button>
                <div class="login-main-section pad-top-120 pad-left-30">
                  <div class="login-section2">
                    <form>
                      <input type="email" class="modal-input" name="" placeholder="Email">
                      <input type="password" class="modal-input" name="" placeholder="Password">
                      <input type="submit" class="modal-submit" name="" value="Login">
                    </form>
                  </div>
                  <div class="login-section3">
                    <h3 class="news-font no-margin">Forgot Your Password?</h3>
                    <div class="social-login">
                      <a href="" class="m-r-30" style="background: #3B5998;"><i class="fa fa-facebook-f"></i>&nbsp; FACEBOOK</a>
                      <a href="" style="background:#D34836;"><i class="fa fa-google"></i>&nbsp; GOOGLE</a>
                    </div>
                    <h4 class="news-font pad-top-60 pad-bot-20">New To Ontailors ? Create An Account</h4>
                  </div> 
                </div>                             
              </div>      
            </div>            
          </div>
        </div>
      </div>      
    </div>
  </div>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#register">Register</button>

  <div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog" style="max-width: 780px;">
      <div class="modal-content">        
        <div class="modal-body login-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-12" style="background: #044372; text-align: center;">
                <button type="button" class="close mobile" data-dismiss="modal">&times;</button>
                <div class="register-section1 pad-top-180">
                  <img src="{{URL::to('/public/website')}}/images/login-page.png">
                  <h3 class="no-margin news-font pad-top-30">CRATE YOUR ACCOUNT</h3>
                </div>                
              </div>
              <div class="col-lg-8 col-md-12 col-12">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="login-main-section pad-top-120 pad-left-30">
                  <div class="register-section2">
                    <form>
                      <input type="text" class="modal-input" name="" placeholder="Name">
                      <input type="email" class="modal-input" name="" placeholder="Email">
                      <input type="password" class="modal-input" name="" placeholder="Password">
                      <input type="submit" class="modal-submit" style="margin:0px;" name="" value="Create Account">
                    </form>
                  </div>
                  <div class="login-section3 create-section3 pad-bot-90">
                    <div class="social-login">
                      <a href="" class="m-r-30" style="background: #3B5998;"><i class="fa fa-facebook-f"></i>&nbsp; FACEBOOK</a>
                      <a href="" style="background:#D34836;"><i class="fa fa-google"></i>&nbsp; GOOGLE</a>
                    </div>
                  </div>
                </div>                              
              </div>      
            </div>            
          </div>
        </div>
      </div>      
    </div>
  </div>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#forget">Forget Password</button>

  <div class="modal fade" id="forget" role="dialog">
    <div class="modal-dialog" style="max-width: 780px;">
      <div class="modal-content">        
        <div class="modal-body login-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-12" style="background: #044372; text-align: center;">
                <button type="button" class="close mobile" data-dismiss="modal">&times;</button>
                <div class="forget-section1 pad-top-160">
                  <img src="{{URL::to('/public/website')}}/images/login-page.png">
                  <h3 class="no-margin news-font pad-top-30">RECOVER PASSWORD</h3>
                </div>                
              </div>
              <div class="col-lg-8 col-md-12 col-12">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="forget-section2 pad-top-70 pad-left-30 pad-right-60">
                  <p class="no-margin news-font pad-bot-50">If you forgot your password, Enter your E-mail and we will send you a message with the instructions to reset your password.</p>
                  <form>
                    <input type="email" name="" class="modal-input" placeholder="Email">
                    <input type="submit" style="margin-right: 6px;" class="forgot-btn1 news-font"  name="" value="Back">
                    <input type="submit" style="margin-left: 6px;" class="forgot-btn2 news-font" name="" value="Recover">
                  </form>
                </div>
                <div class="login-section3">
                    <h3 class="news-font no-margin">Forgot Your Password?</h3>
                    <div class="social-login">
                      <a href="" class="m-r-30" style="background: #3B5998;"><i class="fa fa-facebook-f"></i>&nbsp; FACEBOOK</a>
                      <a href="" style="background:#D34836;"><i class="fa fa-google"></i>&nbsp; GOOGLE</a>
                    </div>
                    <h4 class="news-font pad-top-60 pad-bot-20">New To Ontailors ? Create An Account</h4>
                  </div>                               
              </div>      
            </div>            
          </div>
        </div>
      </div>      
    </div>
  </div>

  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#payment-successfull">Payment Successfull</button>
<style type="text/css">
  
</style>
  <div class="modal fade" id="payment-successfull" role="dialog">
    <div class="modal-dialog" style="max-width: 650px;">
      <div class="modal-content">        
        <div class="modal-body login-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <button type="button" class="close payment-cross" data-dismiss="modal">&times;</button>
                <div class="payment-section pad-top-60">
                  <img src="{{URL::to('/public/website')}}/images/green-tick.png">
                  <h2 class="news-font pad-top-20">PAYMENT SUCCESSFUL</h2>
                  <form>
                    <input type="submit" class="payment-section-btn news-font m-t-60 m-b-40" name="" value="VIEW ORDER HISTORY">
                  </form>
                </div>                             
              </div>      
            </div>            
          </div>
        </div>
      </div>      
    </div>
  </div>

@endsection