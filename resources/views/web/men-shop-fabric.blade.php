@extends('web.includes.master2')
@section('title', 'Measurement Profile')
@section('content')

<!-- section heading -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-top-100 pad-bot-100">
    <h3 class="no-margin" style="text-align: center;">
      <span class="measurement-head news-font pad-right-30">FABRIC</span>
      <span class="measurement-head1 news-font pad-left-30">CUSTOMIZE</span>
    </h3>   
  </section>
<!-- section heading close -->

<!-- section1 start -->


<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav1 {
    height: 650px;
     width: 0; 
    position: absolute;
    z-index: 1;
    top: 60px;
    left: -70px;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    box-shadow: 3px 0px 17px 3px black;

}
.sidenav1 a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav1 a:hover {
  color: #f1f1f1;
}

.sidenav1 .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}


.filter-section1 {
    padding: 0px 20px 0px 85px;
}

.accordion-section .panel-default .panel-title a {
    padding: 0px;
}
.accordion-section .panel-default > .panel-heading {
    padding: 0px 0px;
}

.filter-section1 h3 a {
    font-size: 20px !important;

line-height: 25px !important;
/* identical to box height, or 125% */

letter-spacing: 0.05em !important;

color: #000000 !important;
}
.filter-section1 h3 a::after {
	margin: 0px !important;
	}
.custom-control-input:checked~.custom-control-label::before {
  color: #fff;
  border-color: #7B1FA2;

}

.custom-control-input:checked~.custom-control-label.green::before {
  background-color: green;
  border: 1px solid black;

}

label.custom-control-label::before {
    width: 22px;
    height: 22px;
}
.inner-panel-section {
    text-align: center;
}
.custom-control.custom-radio {
    margin: 0 auto;
}
label.custom-control-label.red::before {
    background: #E33131 !important;
}
.custom-control-input:checked~.custom-control-label.red::before {
  border: 1px solid black;
}
label.custom-control-label.blue::before {
    background: #67C2D6 !important;
}
.custom-control-input:checked~.custom-control-label.blue::before {
  border: 1px solid black;
}

label.custom-control-label.green::before {
    background: #72C854 !important;
}
.custom-control-input:checked~.custom-control-label.green::before {
  border: 1px solid black;
}

label.custom-control-label.yellow::before {
    background: #DDEE17 !important;
}
.custom-control-input:checked~.custom-control-label.yellow::before {
  border: 1px solid black;
}

label.custom-control-label.dblue::before {
    background: #141C67 !important;
}
.custom-control-input:checked~.custom-control-label.dblue::before {
  border: 1px solid black;
}

label.custom-control-label.lgreen::before {
    background: #2AB997 !important;
}
.custom-control-input:checked~.custom-control-label.lgreen::before {
  border: 1px solid black;
}

label.custom-control-label.grey::before {
    background: #C4C4C4 !important;
}
.custom-control-input:checked~.custom-control-label.grey::before {
  border: 1px solid black;
}

label.custom-control-label.brown::before {
    background: #4E4040 !important;
}
.custom-control-input:checked~.custom-control-label.brown::before {
  border: 1px solid black;
}

label.custom-control-label.dgreen::before {
    background: #06511B !important;
}
.custom-control-input:checked~.custom-control-label.dgreen::before {
  border: 1px solid black;
}

label.custom-control-label.pink::before {
    background: #E17ECB !important;
}
.custom-control-input:checked~.custom-control-label.pink::before {
  border: 1px solid black;
}

.custom-radio .custom-control-input:checked~.custom-control-label::after {
    background-image: none;
}


.xzoom-thumbs {
    display: inline-block !important;
    margin: 0px 30px 20px 0px !important;
    align-content: left !important;
        width: 40%;
}
.xzoom-gallery {
    border: none !important;
    width: 100% !important;
}
.men-shop-fabric-3 {
    text-align: right;
}
.men-shop-fabric-3 h2 {
    font-weight: bold;
    font-size: 25px;
    line-height: 35px;
    text-align: right;
    letter-spacing: 0.05em;
}
.men-shop-fabric-3 h3 {
    font-weight: bold;
    font-size: 25px;
    line-height: 40px;
    letter-spacing: 0.05em;
    text-transform: capitalize;
    color: #797878;
}
.men-shop-fabric-3 h4 {
    font-weight: bold;
    font-size: 35px;
    line-height: 40px;
    letter-spacing: 0.05em;
    color: #797878;
}
.sharing-options img {
    padding-left: 30px;
}
.xzoom-thumbs.new {
    width: 15%;
    text-align: left;
    float: left;
}
img#xzoom-default {
    width: 65% !important;
    height: 520px !important;
}
.xzoom-container i {
    bottom: 65px;
    right: 40px;
}


.my {
    position: relative;
    padding-left: 32px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    font-weight: normal;
    font-size: 14.5px;
    line-height: 14px;
    letter-spacing: 0.05em;
    color: #000000;
}
.checkmark {
    background: transparent;
    border: 1px solid;
    position: absolute;
    top: 0;
    left: 0;
    height: 13px;
    width: 13px;
}

/* Hide the browser's default checkbox */
.my input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;

}
/* On mouse-over, add a grey background color */
.my:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.my input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.my input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.my .checkmark:after {
    left: 3px;
    top: 0px;
    width: 5px;
    height: 8px;
    border: solid white;
    border-width: 0 1px 1px 0;
    -webkit-transform: rotate(
45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(
45deg);
}
</style>

 <section class="container-fluid pad-left-80 pad-right-80">
    <div class="row">
       	<div class="col-lg-6 col-md-6 col-12 col-sm-12">
       		<div class="men-shop-fabric-1">
       			<h2 class="abril-font no-margin"><span style="font-size:30px;cursor:pointer" onclick="openNav1()">&#9776;</span> FILTERS</h2>
					<div id="mySidenav1" class="sidenav1 pad-top-60">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
					  <div class="filter-section1">
            <section class="accordion-section" aria-label="Question Accordions">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">              
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading1">
                    <h3 class="panel-title filter-color">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                      COLOR
                      </a>
                    </h3>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                    <div class="panel-body">
                      <div class="inner-panel-section pad-top-10 pad-bot-10">
                        <div class="custom-control custom-radio custom-control-inline pad-right-50">
						  <input type="radio" id="rd_1" name="rd" class="custom-control-input" value="Yes">
						  <label class="custom-control-label red" for="rd_1"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline pad-right-50">
						  <input type="radio" id="rd_2" name="rd" class="custom-control-input" value="No">
						  <label class="custom-control-label blue" for="rd_2"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline pad-right-50">
						  <input type="radio" id="rd_3" name="rd" class="custom-control-input" value="No">
						  <label class="custom-control-label green" for="rd_3"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline pad-right-50">
						  <input type="radio" id="rd_4" name="rd" class="custom-control-input" value="No">
						  <label class="custom-control-label yellow" for="rd_4"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" id="rd_5" name="rd" class="custom-control-input" value="No">
						  <label class="custom-control-label dblue" for="rd_5"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline pad-right-50">
						  <input type="radio" id="rd_6" name="rd" class="custom-control-input" value="No">
						  <label class="custom-control-label lgreen" for="rd_6"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline pad-right-50">
						  <input type="radio" id="rd_7" name="rd" class="custom-control-input" value="No">
						  <label class="custom-control-label grey" for="rd_7"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline pad-right-50">
						  <input type="radio" id="rd_8" name="rd" class="custom-control-input" value="No">
						  <label class="custom-control-label brown" for="rd_8"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline pad-right-50">
						  <input type="radio" id="rd_9" name="rd" class="custom-control-input" value="No">
						  <label class="custom-control-label dgreen" for="rd_29"></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" id="rd_10" name="rd" class="custom-control-input" value="No">
						  <label class="custom-control-label pink" for="rd_10"></label>
						</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                     	MATERIAL
                      </a>
                    </h3>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body">
                      <div class="inner-panel-section pad-top-10 pad-bot-10" style="text-align: left !important;">
                        <label class="my">COTTON
						  <input type="checkbox" checked="checked">
						  <span class="checkmark"></span>
						</label>
						<label class="my pad-left-90">COTTON BLEND
						  <input type="checkbox">
						  <span class="checkmark m-l-60"></span>
						</label>
						<label class="my">LINEN
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="my" style="    padding-left: 105px !important;">TENCEL
						  <input type="checkbox">
						  <span class="checkmark m-l-80"></span>
						</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                     	PATTERN
                      </a>
                    </h3>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body">
                      <div class="inner-panel-section pad-top-10 pad-bot-10" style="text-align: left !important;">
                        <label class="my">PLAIN
						  <input type="checkbox" checked="checked">
						  <span class="checkmark"></span>
						</label>
						<label class="my pad-left-90">STRIPPED
						  <input type="checkbox">
						  <span class="checkmark m-l-60"></span>
						</label>
						<label class="my">CHECKED
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="my" style="    padding-left: 105px !important;">DOTTED
						  <input type="checkbox">
						  <span class="checkmark m-l-80"></span>
						</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading4">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                     FABRIC TYPE
                      </a>
                    </h3>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body">
                      <div class="inner-panel-section pad-top-10 pad-bot-10" style="text-align: left !important;">
                        <label class="my">DENIM
						  <input type="checkbox" checked="checked">
						  <span class="checkmark"></span>
						</label>
						<label class="my pad-left-90">POPLIN
						  <input type="checkbox">
						  <span class="checkmark m-l-60"></span>
						</label>
						<label class="my">TWILL
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="my" style="padding-left: 105px !important;">FLANNEL
						  <input type="checkbox">
						  <span class="checkmark m-l-80"></span>
						</label>
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
       	<div class="col-lg-6 col-md-6 col-12 col-sm-12">
       		<div class="men-shop-fabric-2">
       			<h2 class="abril-font no-margin">SELECT FABRIC</h2>        			
       		</div>
       	</div>
    </div>
    <hr class="no-margin filter-section-1">
</section>
<style type="text/css">

</style>
<!-- section1 start -->
 <section class="container-fluid pad-top-60 pad-left-80 pad-right-80">
      <div class="row">
        <div class="col-lg-10 col-md-10 col-12 col-sm-12">
          <div class="xzoom-container">            
            <img class="xzoom order-lg-1" id="xzoom-default" src="{{URL::to('/public/website')}}/images/fabric.jpg" xoriginal="{{URL::to('/public/website')}}/images/fabric2.jpg" />
            <div class="xzoom-thumbs new">
              <a href="{{URL::to('/public/website')}}/images/fabric2.jpg">
              	<img class="xzoom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30">
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
              	<img class="xzoom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30">
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
              	<img class="xzoom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30">
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
            <div class="xzoom-thumbs new">
              <a href="{{URL::to('/public/website')}}/images/fabric2.jpg">
              	<img class="xzoom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30">
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
              	<img class="xzoom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30">
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
              	<img class="xzoom-gallery no-margin" width="80" src="{{URL::to('/public/website')}}/images/fabric.jpg">
              	<div class="row no-margin pad-top-10 pad-bot-30">
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
            <!-- <h4 class="news-font">Shirts</h4> -->
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