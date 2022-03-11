<header>
         <div class="container">
            <div class="logo">
               <a href="{{URL::to('/public/admin')}}/"> <img src="{{URL::to('/public/admin')}}/images/logo.png"> </a>   
            </div>
            <div class="header-actions">
               <div class="dropdown dropdown-1">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell"> </i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="{{URL::to('/public/admin')}}/#">Action</a>
                     <a class="dropdown-item" href="{{URL::to('/public/admin')}}/#">Another action</a>
                     <a class="dropdown-item" href="{{URL::to('/public/admin')}}/#">Something else here</a>
                  </div>
               </div>
               <div class="dropdown dropdown-1">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-cog"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="{{URL::to('/public/admin')}}/#">Action</a>
                     <a class="dropdown-item" href="{{URL::to('/public/admin')}}/#">Another action</a>
                     <a class="dropdown-item" href="{{URL::to('/public/admin')}}/#">Something else here</a>
                  </div>
               </div>
               <div class="navbar-handler">
                  <i class="fa fa-bars"> </i>
               </div>
            </div>
         </div>
      </header>