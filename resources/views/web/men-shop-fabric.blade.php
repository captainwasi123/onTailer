@extends('web.includes.master2')
@section('title', 'Men Shop Fabric')
@section('content')
<script type="text/javascript">
  function openNav1() {
  document.getElementById("mySidenav1").style.width = "450px";
}

function closeNav1() {
  document.getElementById("mySidenav1").style.width = "0";
}
if (screen.width <= 768) {
    function openNav1() {
  document.getElementById("mySidenav1").style.width = "240px";
}

function closeNav1() {
  document.getElementById("mySidenav1").style.width = "0";
}

}
</script>
<!-- section heading -->
  <section>
    <div class="container-fluid custom-gird-website shop-size pad-top-100 pad-bot-100">
      <h3 class="no-margin" style="text-align: center;">
        <span class="measurement-head news-font pad-right-30"><b>FABRIC</b></span>
        <span class="measurement-head1 news-font pad-left-30">CUSTOMIZE</span>
      </h3>
    </div>   
  </section>

<!-- section heading close -->

<!-- section1 start -->

 <section>
  <div class="container-fluid custom-gird-website">
    <div class="row">
       	<div class="col-lg-6 col-md-6 col-6 col-sm-12">
       		<div class="men-shop-fabric-1">
       			<h2 class="abril-font no-margin">
       				<span style="font-size:30px;cursor:pointer" onclick="openNav1()">
       					<img src="{{URL::to('/public/website')}}/images/filter-left-icon.png">
       				</span> FILTERS</h2>
					<div id="mySidenav1" class="sidenav1 pad-top-60">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">
					  	<img src="{{URL::to('/public/website')}}/images/cross-icon.png">
					  </a>
					  <div class="filter-section1">
            <section class="accordion-section filter-accordian" aria-label="Question Accordions">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">              
                <div class="panel panel-default ">
                  <div class="panel-heading no-pad" role="tab" id="heading1">
                    <h3 class="panel-title filter-color no-margin pad-bot-10">
                      <a class="collapsed no-pad" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                      COLOR
                      </a>
                    </h3>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse  no-margin" role="tabpanel" aria-labelledby="heading1">
                    <div class="panel-body">
                    	<div class="inner-panel-section pad-top-20 pad-bot-30">
                    		<div class="color-section">
                    			<div class="custom-control custom-radio custom-control-inline pad-right-40 no-margin">
								  <input type="radio" id="rd_1" name="rd" class="custom-control-input" value="Yes">
								  <label class="custom-control-label red color-size" for="rd_1"></label>
								</div>
								<div class="custom-control custom-radio custom-control-inline pad-right-40 no-margin" >
								  <input type="radio" id="rd_2" name="rd" class="custom-control-input" value="No">
								  <label class="custom-control-label blue color-size" for="rd_2"></label>
								</div>
								<div class="custom-control custom-radio custom-control-inline pad-right-40 no-margin" >
								  <input type="radio" id="rd_3" name="rd" class="custom-control-input" value="No">
								  <label class="custom-control-label green color-size" for="rd_3"></label>
								</div>
								<div class="custom-control custom-radio custom-control-inline pad-right-40 no-margin" >
								  <input type="radio" id="rd_4" name="rd" class="custom-control-input" value="No">
								  <label class="custom-control-label yellow color-size" for="rd_4"></label>
								</div>
								<div class="custom-control custom-radio custom-control-inline no-margin" >
								  <input type="radio" id="rd_5" name="rd" class="custom-control-input" value="No">
								  <label class="custom-control-label dblue color-size" for="rd_5"></label>
								</div>
	                        
								<div class="custom-control custom-radio custom-control-inline pad-right-40 no-margin">
								  <input type="radio" id="rd_6" name="rd" class="custom-control-input" value="No">
								  <label class="custom-control-label lgreen color-size" for="rd_6"></label>
								</div>
								<div class="custom-control custom-radio custom-control-inline pad-right-40 no-margin">
								  <input type="radio" id="rd_7" name="rd" class="custom-control-input" value="No">
								  <label class="custom-control-label grey color-size" for="rd_7"></label>
								</div>
								<div class="custom-control custom-radio custom-control-inline pad-right-40 no-margin">
								  <input type="radio" id="rd_8" name="rd" class="custom-control-input" value="No">
								  <label class="custom-control-label brown color-size" for="rd_8"></label>
								</div>
								<div class="custom-control custom-radio custom-control-inline pad-right-40 no-margin">
								  <input type="radio" id="rd_9" name="rd" class="custom-control-input" value="No">
								  <label class="custom-control-label dgreen color-size" for="rd_29"></label>
								</div>
								<div class="custom-control custom-radio custom-control-inline no-margin">
								  <input type="radio" id="rd_10" name="rd" class="custom-control-input" value="No">
								  <label class="custom-control-label pink color-size" for="rd_10"></label>
								</div>
		                    </div>
                    	</div>
                  	</div>
                </div>
                <div class="panel panel-default">
	                <div class="panel-heading no-pad" role="tab" id="heading2">
	                    <h3 class="panel-title no-margin pad-bot-10 pad-top-20">
	                      <a class="collapsed no-pad" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">MATERIAL</a>
	                    </h3>
	                  </div>
	                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
	                    <div class="panel-body">
	                      	<div class="inner-panel-section pad-top-20 pad-bot-30">
	                      		<div class="material-section">
	                      			<div class="row">
	                      				<div class="col-md-6">
	                      					<label class="my no-margin">COTTON
												            <input type="checkbox" checked="checked">
												            <span class="checkmark"></span>
											            </label>
            											<label class="my no-margin">LINEN
            										    	<input type="checkbox">
            										    	<span class="checkmark"></span>
            											</label>
	                      				</div>
                                <div class="col-md-6">
                                  <label class="my no-margin">TENCEL
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="my no-margin">COTTON BLEND
                                      <input type="checkbox">
                                      <span class="checkmark"></span>
                                  </label>
                                </div>
	                      				<!-- <div class="col-md-6 no-pad">
	                      					<label class="my no-margin">COTTON BLEND
												<input type="checkbox">
												<span class="checkmark"></span>
											</label>                      				
											<label class="my no-margin">TENCEL
												<input type="checkbox">
												<span class="checkmark "></span>
											</label>
	                      				</div>  -->                     				
	                      			</div>
								</div>
	                      	</div>
	                    </div>
	                </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading no-pad" role="tab" id="heading3">
	                    <h3 class="panel-title no-margin pad-bot-10 pad-top-20">
	                      <a class="collapsed no-pad" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">PATTERN</a>
	                    </h3>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
	                    <div class="panel-body">
	                      <div class="inner-panel-section pad-top-20 pad-bot-30">
	                      	<div class="material-section">
	                      		<div class="row">
	                      			<div class="col-md-6">
					                    <label class="my">PLAIN
                                <input type="checkbox" checked="checked">
											          <span class="checkmark"></span>
										          </label>
										          <label class="my">STRIPPED
											          <input type="checkbox">
											           <span class="checkmark"></span>
										          </label>
									         </div>
                           <div class="col-md-6">
                              <label class="my">CHECKED
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                              <label class="my">DOTTED
                                <input type="checkbox">
                                 <span class="checkmark"></span>
                              </label>
                           </div>
	                      			<!-- <div class="col-md-6 no-pad">
										<label class="my">CHECKED
											 <input type="checkbox">
											 <span class="checkmark"></span>
										</label>
										<label class="my">DOTTED
											 <input type="checkbox">
											 <span class="checkmark"></span>
										</label>
									</div> -->
								</div>
	                      	</div>
	                    </div>
                  	</div>
                </div>

                <div class="panel panel-default">
                  	<div class="panel-heading no-pad" role="tab" id="heading4">
	                    <h3 class="panel-title no-margin pad-bot-10 pad-top-20">
	                      <a class="collapsed no-pad" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">FABRIC TYPE</a>
	                    </h3>
                  	</div>
                  	<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
	                    <div class="panel-body">
	                        <div class="inner-panel-section pad-top-20 pad-bot-30">
		                      	<div class="material-section">
			                      	<div class="row">
			                      		<div class="col-md-6">
  						                    <label class="my">DENIM
  												          <input type="checkbox" checked="checked">
  												          <span class="checkmark"></span>
  											          </label>
  											          <label class="my">POPLIN
  											            <input type="checkbox">
  												          <span class="checkmark"></span>
  											          </label>
										            </div>
                                <div class="col-md-6">
                                  <label class="my">DENIM
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="my">POPLIN
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
										<!-- <div class="col-md-6 no-pad">
											<label class="my">TWILL
											  	<input type="checkbox">
											  	<span class="checkmark"></span>
											</label>
											<label class="my">FLANNEL
											  	<input type="checkbox">
											  	<span class="checkmark"></span>
											</label>
		                      			</div> -->
		                  			</div>
	                    		</div>
	                  		</div>
	                	</div>
              		</div>
              	</div>
            </section>
		</div>
      </div>
  </div>
</div>
       	<div class="col-lg-6 col-md-6 col-6 col-sm-12">
       		<div class="men-shop-fabric-2">
       			<h2 class="abril-font no-margin">SELECT FABRIC</h2>        			
       		</div>
       	</div>
    </div>
    <hr class="no-margin filter-section-1">
  </div>
</section>

<!-- section1 start -->
  <section>
    <div class="container-fluid pad-top-60 custom-gird-website">
      <div class="row">
        <div class="col-lg-10 col-md-10 col-12 col-sm-12">
          <div class="xzoom-container xzoom-custom">            
            <img class="xzoom zoom-main-image order-lg-1" id="xzoom-default" src="{{URL::to('/public/website')}}/images/fabric.jpg" xoriginal="{{URL::to('/public/website')}}/images/fabric2.jpg" />
            <div class="xzoom-thumbs xzoom-section">
              <a href="{{URL::to('/public/website')}}/images/fabric2.jpg">
              	<img class="xzoom-gallery xzoom-custom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30 xzoom-sec-for-mobile">
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h3 class="news-font no-margin">CROWLEY</h3>
              				<h4 class="news-font no-margin">CROWLEY</h4>
              			</div>              			
              		</div>
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h4 class="news-font no-margin" style="text-align: right;">Rs 270/-</h4>
              			</div>
              		</div>              		
              	</div>
              </a>

              <a href="{{URL::to('/public/website')}}/images/fabric2.jpg">
              	<img class="xzoom-gallery xzoom-custom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30 xzoom-sec-for-mobile">
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h3 class="news-font no-margin">CROWLEY</h3>
              				<h4 class="news-font no-margin">CROWLEY</h4>
              			</div>              			
              		</div>
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h4 class="news-font no-margin" style="text-align: right;">Rs 270/-</h4>
              			</div>
              		</div>              		
              	</div>
              </a>
              <a href="{{URL::to('/public/website')}}/images/fabric2.jpg">
              	<img class="xzoom-gallery xzoom-custom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30 xzoom-sec-for-mobile">
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h3 class="news-font no-margin">CROWLEY</h3>
              				<h4 class="news-font no-margin">CROWLEY</h4>
              			</div>              			
              		</div>
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h4 class="news-font no-margin" style="text-align: right;">Rs 270/-</h4>
              			</div>
              		</div>              		
              	</div>
              </a>
            </div>
            <div class="xzoom-thumbs xzoom-section m-r-50">
              <a href="{{URL::to('/public/website')}}/images/fabric2.jpg">
              	<img class="xzoom-gallery xzoom-custom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30 xzoom-sec-for-mobile">
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h3 class="news-font no-margin">CROWLEY</h3>
              				<h4 class="news-font no-margin">CROWLEY</h4>
              			</div>              			
              		</div>
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h4 class="news-font no-margin" style="text-align: right;">Rs 270/-</h4>
              			</div>
              		</div>              		
              	</div>
              </a>

              <a href="{{URL::to('/public/website')}}/images/fabric2.jpg">
              	<img class="xzoom-gallery xzoom-custom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30 xzoom-sec-for-mobile">
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h3 class="news-font no-margin">CROWLEY</h3>
              				<h4 class="news-font no-margin">CROWLEY</h4>
              			</div>              			
              		</div>
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h4 class="news-font no-margin" style="text-align: right;">Rs 270/-</h4>
              			</div>
              		</div>              		
              	</div>
              </a>
              <a href="{{URL::to('/public/website')}}/images/fabric2.jpg">
              	<img class="xzoom-gallery xzoom-custom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30 xzoom-sec-for-mobile">
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h3 class="news-font no-margin">CROWLEY</h3>
              				<h4 class="news-font no-margin">CROWLEY</h4>
              			</div>              			
              		</div>
              		<div class="col-md-6 no-pad">
              			<div class="xzoom-description">
              				<h4 class="news-font no-margin" style="text-align: right;">Rs 270/-</h4>
              			</div>
              		</div>              		
              	</div>
              </a>
            </div>
            <i class="fa fa-search"></i>          
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-12 col-sm-12 ">
          <div class="men-shop-fabric-3">
            <h2 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h2>
            <h3 class="news-font no-margin pad-top-10">$ 1000/-</h3>
            <h4 class="news-font no-margin pad-top-10">Cotton</h4>
            <div class="sharing-options pad-top-40 pad-bot-40">
            	<img src="{{URL::to('/public/website')}}/images/heart.png">
            	<img src="{{URL::to('/public/website')}}/images/share-icon.png">
            </div>
              <button class="btn no-margin men-shop-fabric-btn news-font">NEXT</button>            
          </div>        
      </div>                
    </div>
  </div>    
</section>    
<!-- section1 close -->

@endsection