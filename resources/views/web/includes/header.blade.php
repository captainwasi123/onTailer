<!-- header section start --> 
 <header>
  <nav class="navbar navbar-inverse pad-top-40 pad-bot-30">
    <div class="container-fluid">
      <div class="navbar-header">
        <div id="togglebtn" onclick="togglesidebar()">            
            <img src="{{URL::to('/public/website')}}/images/humberger.png">
          </div>
        <div id="sidebar">
          
            <ul class="main-menu pad-top-40 main-menu-custom">
                <li> <a href="{{route('home')}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
                <li> <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Shop</a>
                  <div class="sub-menu">
                    <ul class="pad-top-40">
                      <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Men</a>
                        <div class="nested-menu">
                            <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Formal
                              <div class="inner-nested-menu">
                                <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Shirts</a>
                                <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Trousers</a>
                                <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Blazers</a>
                              </div>
                            </a>
                            <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Casual
                              <div class="inner-nested-menu">
                                <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Shirts</a>
                                <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Jeans</a>
                              </div>
                            </a>
                            <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Ethnic
                              <div class="inner-nested-menu">
                                <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Kurtas</a>
                                <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Pyjamas</a>
                              </div>
                            </a>
                          </div>
                        </li>
                      <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Women</a>
                        <div class="nested-menu">
                          <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Formal
                          <div class="inner-nested-menu">
                              <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Shirts</a>
                              <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Trousers</a>
                              <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Blazers</a>
                            </div>
                          </a>
                          <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Casual
                            <div class="inner-nested-menu">
                              <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Shirts</a>
                              <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Dresses</a>
                              <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Jeans</a>
                            </div>
                          </a>
                          <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Ethnic
                            <div class="inner-nested-menu">
                              <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Kurtis</a>
                              <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Plazzos</a>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Get Measured</a>
                <div class="sub-menu">
                    <ul class="pad-top-40">
                      <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Men</a></li>
                      <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Women</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> My Orders</a></li>
                <li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> My Profile</a></li>
                <li>
                  <a href="{{route('contactUs')}}">
                    <i class="fa fa-headphones" aria-hidden="true"></i>Contact Us
                  </a>
                </li>
            </ul>
            <ul class="main-menu pad-top-40 main-menu-custom menu-bottom">
                <li> <a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i> Quick Links</a>
                <div class="sub-menu">
                    <ul class="pad-top-40 " style="padding-left: 10px;">
                      <li>
                        <a href="{{route('about')}}">
                          <i class="fa fa-angle-double-right" aria-hidden="true"></i> About Us
                        </a>
                      </li>
                      <li>
                        <a href="{{route('fitGurantee')}}">
                          <i class="fa fa-angle-double-right" aria-hidden="true"></i> Fit Guarantee
                        </a>
                      </li>
                      <li>
                        <a href="{{route('returnPolicy')}}">
                          <i class="fa fa-angle-double-right" aria-hidden="true"></i> Alteration & Return Policy
                        </a>
                      </li>
                      <li>
                        <a href="{{route('termsConditions')}}">
                          <i class="fa fa-angle-double-right" aria-hidden="true"></i> Terms & Conditions
                        </a>
                      </li>
                      <li>
                        <a href="{{route('shoppingPolicy')}}">
                          <i class="fa fa-angle-double-right" aria-hidden="true"></i> Shipping Policy
                        </a>
                      </li>
                      <li>
                        <a href="{{route('privacyPolicy')}}">
                          <i class="fa fa-angle-double-right" aria-hidden="true"></i> Privacy Policy
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
            </ul>
        </div>
      
      </div>
        <a class="white-add brand" style="margin: 0; float: none; text-align:center" href="{{route('home')}}"><img src="{{URL::to('/public/website')}}/images/logo.png" /></a>
      <div class="nav navbar-nav navbar-right">
        <a href="#" class="white-add"><img src="{{URL::to('/public/website')}}/images/user.png" width="20px" ></a>
        <a href="#" class="white-add"><img src="{{URL::to('/public/website')}}/images/headphones.png" width="20px"></a>
        <a href="#" class="white-add"><img src="{{URL::to('/public/website')}}/images/cart.png" width="20px"></a>
      </div>
    </div>
  </nav>
</header>
<!-- header section close --> 
