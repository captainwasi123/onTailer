 $(document).ready(function(){


 	var val1 = 0;

 	$('.navbar-handler').click(function(){

 		if(val1==0){
  		$(this).children("svg").toggleClass("fa-bars");
  		$(this).children("svg").toggleClass("fa-times");
   		$('.sidebar-menu').slideToggle();
   		val1 = 1;
   	}
   	else {
   		$('.sidebar-menu').slideToggle();
   		$(this).children("svg").toggleClass("fa-bars");
   		$(this).children("svg").toggleClass("fa-times");
   		val1 = 0;
   	}
 	});
 });


jQuery('.dropdown-menu.keep-open').on('click', function (e) {
  e.stopPropagation();
});

if(1) {
  $('body').attr('tabindex', '0');
}
else {
  alertify.confirm().set({'reverseButtons': true});
  alertify.prompt().set({'reverseButtons': true});
}



 $(document).ready(function(){

 $(".trigger-btn1").click(function(){

 $(".trigger-sec1").slideToggle()	

 })


 })
