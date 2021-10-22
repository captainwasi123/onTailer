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
                <div class="login-section1 pad-top-120 pad-bot-50">
                  <h2 class="abril-font pad-bot-50">LOGIN</h2>
                  <img src="{{URL::to('/public/website')}}/images/login-page.png">
                  <h3 class="news-font pad-top-30">ACCESS YOUR ACCOUNT</h3>
                </div>
                
              </div>
              <div class="col-lg-8 col-md-12 col-12">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
              <div class="col-md-4" style="background: #044372;">
                <div class="register-section1">
                  <img src="images/login-page.png">
                  <h3>create your account</h3>
                </div>
                
              </div>
              <div class="col-md-8">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="register-section2">
                  <form>
                    <input type="text" name="" placeholder="Name">
                    <input type="email" name="" placeholder="Email">
                    <input type="password" name="" placeholder="Password">
                    <input type="submit" name="" value="Create Account">
                  </form>
                </div>
                <div class="login-section3">
                  <div class="social-login">
                    <a href="" style="background: #3B5998;"><i class="fa fa-facebook-f"></i>&nbsp; FACEBOOK</a>
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

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#forget">Forget Password</button>

  <div class="modal fade" id="forget" role="dialog">
    <div class="modal-dialog" style="max-width: 780px;">
      <div class="modal-content">        
        <div class="modal-body login-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4" style="background: #044372;">
                <div class="forget-section1">
                  <img src="images/login-page.png">
                  <h3>recover password</h3>
                </div>
                
              </div>
              <div class="col-md-8">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="forget-section2">
                  <p>IF YOU FORGOT YOUR PASSWORD, ENTER YOUR E-MAIL AND WE WILL SEND YOU A MESSAGE WITH THE INSTRUCTIONS TO RESET YOUR PASSWORD.</p>
                  <form>
                    <input type="email"   name="" placeholder="Email">
                    <input type="submit" style="margin-right: 6px;"  name="" value="Login">
                    <input type="submit" style="margin-left: 6px;" class="recover-btn" name="" value="Recover">
                  </form>
                </div>
                <div class="login-section3">
                  <h3>forgot your password?</h3>
                  <div class="social-login">
                    <a href="" style="background: #3B5998;"><i class="fa fa-facebook-f"></i>&nbsp; FACEBOOK</a>
                    <a href="" style="background:#D34836;"><i class="fa fa-google"></i>&nbsp; GOOGLE</a>
                  </div>
                  <h4>New to Ontailors ? Create an account</h4>
                </div>                              
              </div>      
            </div>            
          </div>
        </div>
      </div>      
    </div>
  </div>

@endsection