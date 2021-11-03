@extends('web.includes.master2')
@section('title', 'Manual Measurements')
@section('content')
<style type="text/css">
	footer {
		display: none;
	}
</style>
<section class="custom-sec5">
	<div class="manuals-wrapper">
   <div  class="tab " data-id="tab1">
      <p> TAB 1 </p>
   </div>
 
   <div  class="tab tab-active neck-bg1" data-id="tab2">
    <div class="part-measurement news-font">
    <div class="measure-box-container">
    <form>
    <div class="measure-box5">
    <h4> NECK </h4>
    <p> The neck measurement is taken around the neck with the tape resting on your shoulders. You should put one finger between the tape and the neck if you want to allow for some extra room. </p>
    <div class="mes-field1">
    <input type="text" placeholder="" name="">
    <span> cm </span>
	</div>
    </div>

    <div class="measure-action5">
    <button type="button"   data-toggle="modal" data-target="#size-modal" class="custom-btn7"> SAVE </button>
    <button type="button" class="custom-btn8"> RESET </button>
    </div>	
</form>

    </div>	
    </div>
   </div>
 
   <div  class="tab chest-bg1" data-id="tab3">
          <div class="part-measurement news-font">
    <div class="measure-box-container">
    <form>
    <div class="measure-box5">
    <h4> Chest </h4>
    <p> The chest measurement is taken as a circumference measurement around your chest at the widest point. Stand in a relaxed posture and breathe out. </p>
    <div class="mes-field1">
    <input type="text" placeholder="" name="">
    <span> cm </span>
	</div>
    </div>

    <div class="measure-action5">
    <button type="button"   data-toggle="modal" data-target="#size-modal" class="custom-btn7"> SAVE </button>
    <button type="button" class="custom-btn8"> RESET </button>
    </div>	
</form>

    </div>	
    </div>
   </div>
  
   <div  class="tab waist-bg1" data-id="tab4">
        <div class="part-measurement news-font">
    <div class="measure-box-container">
    <form>
    <div class="measure-box5">
    <h4> Waist </h4>
    <p> The waist measurement is taken as a circumference measurement around your waist just above your belly button. Stand in a relaxed posture and breathe out. </p>
    <div class="mes-field1">
    <input type="text" placeholder="" name="">
    <span> cm </span>
	</div>
    </div>

    <div class="measure-action5">
    <button type="button"   data-toggle="modal" data-target="#size-modal" class="custom-btn7"> SAVE </button>
    <button type="button" class="custom-btn8"> RESET </button>
    </div>	
</form>

    </div>	
    </div>
   </div>
    <div  class="tab seat-bg1" data-id="tab5">
      <div class="part-measurement news-font">
    <div class="measure-box-container">
    <form>
    <div class="measure-box5">
    <h4> Seat </h4>
    <p> The seat measurement is taken as a circumference measurement around your seat at the widest part. </p>
    <div class="mes-field1">
    <input type="text" placeholder="" name="">
    <span> cm </span>
	</div>
    </div>

    <div class="measure-action5">
    <button type="button"   data-toggle="modal" data-target="#size-modal" class="custom-btn7"> SAVE </button>
    <button type="button" class="custom-btn8"> RESET </button>
    </div>	
</form>

    </div>	
    </div>
   </div>
    <div  class="tab shirt-length-bg1" data-id="tab6">
            <div class="part-measurement news-font">
    <div class="measure-box-container">
    <form>
    <div class="measure-box5">
    <h4> Shirt length </h4>
    <p> The shirt length measurement is taken from the top of the shoulder, close to the mid side of your neck, following your body down to the point where you want your shirt to end. </p>
    <div class="mes-field1">
    <input type="text" placeholder="" name="">
    <span> cm </span>
	</div>
    </div>

    <div class="measure-action5">
    <button type="button"   data-toggle="modal" data-target="#size-modal" class="custom-btn7"> SAVE </button>
    <button type="button" class="custom-btn8"> RESET </button>
    </div>	
</form>

    </div>	
    </div>
   </div>
    <div  class="tab shoulder-bg1" data-id="tab7">
      <div class="part-measurement news-font">
    <div class="measure-box-container">
    <form>
    <div class="measure-box5">
    <h4> Shoulder width </h4>
    <p> Think of a line going from your armpit straight upwards to your shoulder. Measure between those two points and hold the tape measure straight. </p>
    <div class="mes-field1">
    <input type="text" placeholder="" name="">
    <span> cm </span>
	</div>
    </div>

    <div class="measure-action5">
    <button type="button"   data-toggle="modal" data-target="#size-modal" class="custom-btn7"> SAVE </button>
    <button type="button" class="custom-btn8"> RESET </button>
    </div>	
</form>

    </div>	
    </div>
   </div>

    <div  class="tab arm-bg1" data-id="tab8">
       <div class="part-measurement news-font">
    <div class="measure-box-container">
    <form>
    <div class="measure-box5">
    <h4> Arm length </h4>
    <p> The sleeve length measurement is taken from the point of your shoulder (where you took the shoulder width measurement), following your bent arm down to where you want the sleeve to end. NOTE 1! Bend your arm slightly when taking this measurement. NOTE 2! This measurement is always the full length of the arm. For short sleeve and 3/4 sleeve you should still measure the full length of the arm. </p>
    <div class="mes-field1">
    <input type="text" placeholder="" name="">
    <span> cm </span>
	</div>
    </div>

    <div class="measure-action5">
    <button type="button"   data-toggle="modal" data-target="#size-modal" class="custom-btn7"> SAVE </button>
    <button type="button" class="custom-btn8"> RESET </button>
    </div>	
</form>

    </div>	
    </div>
   </div>


    <div  class="tab wrist-bg1" data-id="tab9">
       <div class="part-measurement news-font">
    <div class="measure-box-container">
    <form>
    <div class="measure-box5">
    <h4> Wrist </h4>
    <p> The wrist measurement is taken as a circumference measurement around your wrist. NOTE ! We will add movement ease according to the cuff you select.  </p>
    <div class="mes-field1">
    <input type="text" placeholder="" name="">
    <span> cm </span>
	</div>
    </div>

    <div class="measure-action5">
    <button type="button"   data-toggle="modal" data-target="#size-modal" class="custom-btn7"> SAVE </button>
    <button type="button" class="custom-btn8"> RESET </button>
    </div>	
</form>

    </div>	
    </div>
   </div>



    <div  class="tab inseam-bg1" data-id="tab10">
       <div class="part-measurement news-font">
    <div class="measure-box-container">
    <form>
    <div class="measure-box5">
    <h4> Inseam </h4>
    <p> The inseam is measured from the crotch along the inner side of the leg straight down to the floor. Stand upright, do not bend the leg and ask someone to help you take the measurement. </p>
    <div class="mes-field1">
    <input type="text" placeholder="" name="">
    <span> cm </span>
	</div>
    </div>

    <div class="measure-action5">
    <button type="button"   data-toggle="modal" data-target="#size-modal" class="custom-btn7"> SAVE </button>
    <button type="button"  class="custom-btn8"> RESET </button>
    </div>	
</form>

    </div>	
    </div>
   </div>



    <div  class="tab hip-bg1" data-id="tab11">
       <div class="part-measurement news-font">
    <div class="measure-box-container">
    <form>
    <div class="measure-box5">
    <h4> Hip </h4>
    <p> The hip measurement is taken as a circumference measurement around your hips at the widest part.  </p>
    <div class="mes-field1">
    <input type="text" placeholder="" name="">
    <span> cm </span>
	</div>
    </div>

    <div class="measure-action5">
    <button type="button"   data-toggle="modal" data-target="#size-modal" class="custom-btn7"> SAVE </button>
    <button type="button" class="custom-btn8"> RESET </button>
    </div>	
</form>

    </div>	
    </div>
   </div>



</div>
  



   <div class="size-triggers-main ">
      <div class="tab-menu news-font">
         <li>
            <a href="#" class="tab-a " data-id="tab1">
               <div class="size-box1">
                  <h5> MANUAL <br/> SIZE </h5>
               </div>
            </a>
         </li>
         <li>
            <a  class="tab-a active-a" data-id="tab2">
               <div class="size-box2">
                  <img src="{{URL::to('/public/website')}}/images/mes-icon1.png" width="100%">
                  <span> NECK </span>
               </div>
            </a>
         </li>
         <li>
            <a  class="tab-a" data-id="tab3">
               <div class="size-box2">
                  <img src="{{URL::to('/public/website')}}/images/mes-icon2.png" width="100%">
                  <span> CHEST </span>
               </div>
            </a>
         </li>
         <li>
            <a  class="tab-a" data-id="tab4">
               <div class="size-box2">
                  <img src="{{URL::to('/public/website')}}/images/mes-icon3.png" width="100%">
                  <span> WAIST </span>
               </div>
            </a>
         </li>
         <li>
            <a  class="tab-a" data-id="tab5">
               <div class="size-box2">
                  <img src="{{URL::to('/public/website')}}/images/mes-icon4.png" width="100%">
                  <span> SEAT </span>
               </div>
            </a>
         </li>
         <li>
            <a  class="tab-a" data-id="tab6">
               <div class="size-box2">
                  <img src="{{URL::to('/public/website')}}/images/mes-icon5.png" width="100%">
                  <span> SHIRT LENGTH </span>
               </div>
            </a>
         </li>
         <li>
            <a  class="tab-a" data-id="tab7">
               <div class="size-box2">
                  <img src="{{URL::to('/public/website')}}/images/mes-icon6.png" width="100%">
                  <span> SHOULDER WIDTH </span>
               </div>
            </a>
         </li>

         <li>
            <a  class="tab-a" data-id="tab8">
               <div class="size-box2">
                  <span> ARM LENGTH </span>
               </div>
            </a>
         </li>

          <li>
            <a  class="tab-a" data-id="tab9">
               <div class="size-box2">
                  <span> WRIST </span>
               </div>
            </a>
         </li>

          <li>
            <a  class="tab-a" data-id="tab10">
               <div class="size-box2">
                  <span> INSEAM </span>
               </div>
            </a>
         </li>


		<li>
            <a  class="tab-a" data-id="tab11">
               <div class="size-box2">
                  <span> HIP </span>
               </div>
            </a>
         </li>


      </div>
   </div>
   </div>
</section>
 


<!-- Save Measurements Popup Starts Here --> 
<div class="modal fade" id="size-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="max-width: 600px;">
    <div class="modal-content news-font">
      <div class="modal-header5">
        <h4 class="modal-title5">SAVE MEASUREMENT PROFILE </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body5">
      <div class="save-profile-form">

      <form> 
        
        <div class="size-field1">
        <span> NAME YOUR PROFILE </span>
        <input type="text" placeholder="" name="">
        </div>

         <div class="size-field2">
        <span> MY HEIGHT </span>
        <input type="text" placeholder="" name="">
        <b> CM </b>
        </div>

        <div class="size-field2">
        <span> MY WEIGHT </span>
        <input type="text" placeholder="" name="">
        <b> KG </b>
        </div>

        <div class="size-field2">
        <span> AGE </span>
        <input type="text" placeholder="" name="">
        </div>

        <div class="size-field3">
        <input type="submit" value="SAVE" class="custom-btn9" name="">
        </div>

      </form>

      </div>
      </div>
      
    </div>
  </div>
</div>
<!-- Save Measurements Popup Ends Here --> 


@endsection