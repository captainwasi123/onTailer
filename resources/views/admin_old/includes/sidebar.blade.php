<div class="sidebar">
   <div class="sidebar-menu">
      <div id="accordion">
         <div class="panel panel-default">
            <div class="panel-heading">
               <a href="{{URL::to('/admin')}}/index"> <img src="{{URL::to('/public/admin')}}/images/menu-icon1.png"> Dashboard </a>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <a href="{{URL::to('/admin')}}/"> <img src="{{URL::to('/public/admin')}}/images/menu-icon2.png"> Users </a>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <a href="{{URL::to('/admin')}}/"> <img src="{{URL::to('/public/admin')}}/images/menu-icon3.png"> Orders </a>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <a href="{{URL::to('/admin')}}/products"> <img src="{{URL::to('/public/admin')}}/images/menu-icon4.png"> Product </a>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <a href="{{URL::to('/admin')}}/fabric"> <img src="{{URL::to('/public/admin')}}/images/menu-icon5.png"> Fabric </a>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <a href="{{URL::to('/admin')}}/customization"> <img src="{{URL::to('/public/admin')}}/images/menu-icon6.png"> Customize </a>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <a href="{{URL::to('/admin')}}/discount"> <img src="{{URL::to('/public/admin')}}/images/menu-icon7.png"> Discount Coupons </a> 
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <a href="{{URL::to('/admin')}}/"> <img src="{{URL::to('/public/admin')}}/images/menu-icon8.png"> Return & Refund </a>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <a href="{{URL::to('/admin')}}/"> <img src="{{URL::to('/public/admin')}}/images/menu-icon9.png"> SEO </a>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">
               <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"  > <img src="{{URL::to('/public/admin')}}/images/menu-icon10.png"> Database Backups <i class="fa fa-caret-down"> </i> </a>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
               <div class="panel-body">
                  <div class="sub-drop-menu">
                     <ul id="accordion2">
                        <li> <a href="">   Add  </a> </li>
                         <li> <a href="">   View </a> </li>
                        <li> <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"  >   Men  <i class="fa fa-caret-down"> </i> </a>  </li>
                         <div id="collapseTwo" class="panel-collapse collapse nested-drop">
                         <a href=""> Add </a>  
                         <a href=""> View </a>  
                         </div>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="blank-height">
      <span> This is Blank height </span> 
   </div>
</div>