@extends('web.includes.master2')
@section('title', 'Men Shop Customize')
@section('content')

<!-- section heading -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-top-100 pad-bot-100">
    <h3 class="no-margin" style="text-align: center;">
      <span class="measurement-head news-font pad-right-30">FABRIC</span>
      <span class="measurement-head1 news-font pad-left-30"><b>CUSTOMIZE</b></span>
    </h3>   
  </section>

<!-- section heading close -->

<!-- section1 start -->
<style type="text/css">

.filter-accordian {
    border-right: 1px solid #C4C4C4;
}

</style>
 <section class="container-fluid pad-top-20 pad-left-80 pad-right-80 ">
      <div class="row">
        <div class="col-lg-5 col-md-10 col-12 col-sm-12 pad-right-60">
          <section class="accordion-section filter-accordian pad-right-60" aria-label="Question Accordions">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">              
                <div class="panel panel-default ">
                  <div class="panel-heading no-pad" role="tab" id="heading1">
                    <h3 class="panel-title filter-color no-margin pad-bot-10">
                      <a class="collapsed no-pad" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                      COLLAR
                      </a>
                    </h3>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse show  no-margin" role="tabpanel" aria-labelledby="heading1">
                    <div class="panel-body">
                      <div class="inner-panel-section pad-top-20 pad-bot-30">
                        <div class="men-customize-1">
                          <div class="row">
                            <div class="col-md-4">
                              <img src="{{URL::to('/public/website')}}/images/collor-icon1.png">
                              <h4>Wing Collar</h4>
                            </div>
                            <div class="col-md-4">
                              <img src="{{URL::to('/public/website')}}/images/collor-icon2.png">
                              <h4>Stand-up Collar</h4>
                            </div>
                            <div class="col-md-4">
                              <img src="{{URL::to('/public/website')}}/images/collor-icon3.png">
                              <h4>Button Down</h4>
                            </div>
                            <div class="col-md-4">
                              <img src="{{URL::to('/public/website')}}/images/collor-icon4.png">
                              <h4>Wide Cutaway</h4>
                            </div>
                            <div class="col-md-4">
                              <img src="{{URL::to('/public/website')}}/images/collor-icon5.png">
                              <h4>Kent Collar</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading no-pad" role="tab" id="heading2">
                      <h3 class="panel-title no-margin pad-bot-10 pad-top-20">
                        <a class="collapsed no-pad" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">CUFFS</a>
                      </h3>
                    </div>
                  <div id="collapse2" class="panel-collapse collapse show no-margin" role="tabpanel" aria-labelledby="heading2">
                      <div class="panel-body">
                          <div class="inner-panel-section pad-top-20 pad-bot-30">
                            <div class="men-customize-1">
                              <div class="row">
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/cuff-icon1.png">
                                  <h4>Double Square French Cuff</h4>
                                </div>
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/cuff-icon2.png">
                                  <h4>Rounded 1 Button</h4>
                                </div>
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/cuff-icon3.png">
                                  <h4>Two Button Cut</h4>
                                </div>
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/cuff-icon4.png">
                                  <h4>Single Cuff 2 Buttons</h4>
                                </div>
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/cuff-icon5.png">
                                  <h4>Single Cuff 1 Buttons</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading no-pad" role="tab" id="heading3">
                      <h3 class="panel-title no-margin pad-bot-10 pad-top-20">
                        <a class="collapsed no-pad" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">SLEEVES</a>
                      </h3>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse show no-margin" role="tabpanel" aria-labelledby="heading3">
                      <div class="panel-body">
                        <div class="inner-panel-section pad-top-20 pad-bot-30">
                            <div class="men-customize-1">
                              <div class="row">
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/sleeves-icon1.png">
                                  <h4>Long</h4>
                                </div>
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/sleeves-icon2.png">
                                  <h4>Short</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading no-pad" role="tab" id="heading4">
                      <h3 class="panel-title no-margin pad-bot-10 pad-top-20">
                        <a class="collapsed no-pad" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">CHEST POCKET</a>
                      </h3>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse show no-margin" role="tabpanel" aria-labelledby="heading4">
                      <div class="panel-body">  
                        <div class="inner-panel-section pad-top-20 pad-bot-30">
                            <div class="men-customize-1">
                              <div class="row">
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/pocket-icon1.png">
                                  <h4>Standard</h4>
                                </div>
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/pocket-icon2.png">
                                  <h4>No Pocket</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading no-pad" role="tab" id="heading5">
                      <h3 class="panel-title no-margin pad-bot-10 pad-top-20">
                        <a class="collapsed no-pad" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">FIT</a>
                      </h3>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse show no-margin" role="tabpanel" aria-labelledby="heading5">
                      <div class="panel-body">  
                        <div class="inner-panel-section pad-top-20 pad-bot-30">
                            <div class="men-customize-1">
                              <div class="row">
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/fit-icon1.png">
                                  <h4>Normal Fit</h4>
                                </div>
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/fit-icon2.png">
                                  <h4>Slim Fit</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading no-pad" role="tab" id="heading6">
                      <h3 class="panel-title no-margin pad-bot-10 pad-top-20">
                        <a class="collapsed no-pad" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">PLACKET</a>
                      </h3>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse show no-margin" role="tabpanel" aria-labelledby="heading6">
                      <div class="panel-body">  
                        <div class="inner-panel-section pad-top-20 pad-bot-30">
                            <div class="men-customize-1">
                              <div class="row">
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/placket-icon1.png">
                                  <h4>Covered Placket</h4>
                                </div>
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/placket-icon2.png">
                                  <h4>No Placket</h4>
                                </div>
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/placket-icon3.png">
                                  <h4>Front Placket</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading no-pad" role="tab" id="heading7">
                      <h3 class="panel-title no-margin pad-bot-10 pad-top-20">
                        <a class="collapsed no-pad" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">BOTTOM CUT</a>
                      </h3>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse show no-margin" role="tabpanel" aria-labelledby="heading7">
                      <div class="panel-body">  
                        <div class="inner-panel-section pad-top-20 pad-bot-30">
                            <div class="men-customize-1">
                              <div class="row">
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/bottom-icon1.png">
                                  <h4>Classic</h4>
                                  <p>With a long tail that says tucked in.</p>
                                </div>
                                <div class="col-md-4">
                                  <img src="{{URL::to('/public/website')}}/images/bottom-icon2.png">
                                  <h4>No Pocket</h4>
                                  <p>tucked it in or let it all hang out.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-lg-5 col-md-10 col-12 col-sm-12 no-pad">
          <div class="xzoom-container xzoom-custom">            
            <img class="xzoom zoom-main-image order-lg-1" id="xzoom-default" src="{{URL::to('/public/website')}}/images/fabric.jpg" xoriginal="{{URL::to('/public/website')}}/images/fabric2.jpg" />
            <i class="fa fa-search"></i>          
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-12 col-sm-12 ">
          <div class="men-shop-fabric-3">
            <h2 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h2>
            <h3 class="news-font no-margin pad-top-10">$ 1000/-</h3>
            <h4 class="news-font no-margin pad-top-10">Cotton</h4>
            <div class="sharing-options pad-top-40">
              <img src="{{URL::to('/public/website')}}/images/heart.png">
              <img src="{{URL::to('/public/website')}}/images/share-icon.png">
            </div>
            <div class="pad-top-40">
              <button class="btn no-margin men-shop-fabric-btn news-font">NEXT</button>            
            </div>
          </div>        
      </div>                
    </div>    
</section>    
<!-- section1 close -->

@endsection