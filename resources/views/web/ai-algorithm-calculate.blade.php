@extends('web.includes.master2')
@section('title', 'AI Algorithm Calculate')
@section('content')
 
<section class="custom-sec3 pad-top-80 pad-bot-80">
   <div class="custom-container1">
      <div class="row">
         <div class="col-md-12 col-lg-4 col-sm-12 col-12">
            <div class="algorithm-form news-font">
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
            <div class="skeleton-main news-font">
               <form>
                  <div class="row custom-row1">
                     <div class="col-md-3 col-lg-3 col-sm-3 col-12 order-2 order-lg-1 order-md-1 order-sm-1">
                        <div class="field-wrapper2 custom-border1">
                         
                         <div class="fitting-selection news-font text-right m-b-40 m-t-15">
                         <h4> SHOULDERS <span class="custom-line1"> . </span> </h4>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  STRAIGHT </label> </div>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  NORMAL </label> </div>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  STOOPED </label> </div>
                         </div>



                         <div class="fitting-selection news-font text-right m-b-20">
                         <h4> CHEST <span class="custom-line1"> . </span> </h4>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  STRONG </label> </div>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  NORMAL </label> </div>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  CORPULENT </label> </div>
                         </div>

                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12 order-1 order-lg-2 order-md-2 order-sm-2">
                        <div class="skeleton-image">
                           <img src="{{URL::to('/public/website')}}/images/skeleton-1.jpg" width="100%">
                        </div>
                     </div>
                     <div class="col-md-3 col-lg-3 col-sm-3 col-12 order-3 order-lg-3 order-md-3 order-sm-3">
                        <div class="field-wrapper3 custom-border2">
                        
                        <div class="fitting-selection news-font m-b-40 m-t-15">
                         <h4>  <span class="custom-line2"> . </span> ABDOMEN  </h4>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  THIN </label> </div>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  NORMAL </label> </div>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  LARGE </label> </div>
                         </div>


                         <div class="fitting-selection news-font m-b-20">
                         <h4> <span class="custom-line2"> . </span> STANCE  </h4>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  STRAIGHT </label> </div>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  NORMAL </label> </div>
                         <div class="size-select1"> <label> <input type="checkbox" name="">  CURVED </label> </div>
                         </div>
                            
                            
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                        <div class="block-element text-center button-wrapper1">
                           <button class="submit-btn6"> BACK </button>	
                           <button class="submit-btn7"> SAVE </button>	
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
 

 
@endsection