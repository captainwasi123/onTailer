@extends('web.includes.master2')
@section('title', 'Standard Size')
@section('content')
<section class="custom-sec3 pad-top-80 pad-bot-80">
   <div class="custom-container1">
      <div class="row">
         <div class="col-md-12 col-lg-4 col-sm-12 col-12">
            <div class="algorithm-form news-font" style="padding-top: 0px;">
               <form>
                  <div class="form-field5 m-b-30">
                     <h6 class="col-black"> NAME </h6>
                     <input type="text" placeholder="Name" class="field-style5" name="">
                  </div>
                  <div class="form-field5">
                     <h6 class="col-black"> HEIGHT </h6>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                        <div class="form-field5 m-b-30">
                           <select class="field-style7">
                              <option> Feet </option>
                              <option> Feet </option>
                              <option> Feet </option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                        <div class="form-field5 m-b-30">
                           <select class="field-style7">
                              <option> Inch </option>
                              <option> Inch </option>
                              <option> Inch </option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-field5 m-b-30">
                     <h6 class="col-black"> WEIGHT </h6>
                     <input type="text" placeholder="Weight" class="field-style5" name="">
                     <span class="info-tag1"> kg </span>
                  </div>
                  <div class="form-field5 m-b-30">
                     <h6 class="col-black"> AGE</h6>
                     <input type="text" placeholder="Age" class="field-style5" name="">
                  </div>
                  <div class="form-field5">
                     <button class="edit-btn1"> EDIT </button>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-12 col-lg-8 col-sm-12 col-12">
            <div class="standard-size-chart news-font">
               <form>
                  <div class="standard-size-image">
                     <img src="{{URL::to('/public/website')}}/images/standard-size-chart.jpg">
                  </div>
                  <div class="standard-size-options">
                     <div class="standard-selection"> <label> <input type="checkbox" name=""> XS </label>  </div>
                     <div class="standard-selection"> <label> <input type="checkbox" name=""> S </label>  </div>
                     <div class="standard-selection"> <label> <input type="checkbox" name=""> M </label>  </div>
                     <div class="standard-selection"> <label> <input type="checkbox" name=""> L </label>  </div>
                     <div class="standard-selection"> <label> <input type="checkbox" name=""> XL </label>  </div>
                     <div class="standard-selection"> <label> <input type="checkbox" name=""> XXL </label>  </div>
                  </div>
                  <div class="block-element text-center button-wrapper1">
                     <button class="submit-btn6"> SAVE </button>  
                     <button class="submit-btn7"> RESET </button>  
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection