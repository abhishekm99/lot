jQuery(document).ready(function() {
	
  // Your custom js code goes here.
  

});

$(function() { 
    var carousel = $(".carousel"),
       currdeg  = 0;
   $(".nexter").on("click", { d: "n" }, rotate);
   $(".prever").on("click", { d: "p" }, rotate);
   $(".next").on("click", { d: "n" }, rotate);
   $(".prev").on("click", { d: "p" }, rotate);
    
   function rotate(e){
     if(e.data.d=="n"){
	   currdeg = currdeg - 72;
     }
     if(e.data.d=="p"){
	   currdeg = currdeg + 72;
     }
     carousel.css({
       "-webkit-transform": "rotateY("+currdeg+"deg)",
       "-moz-transform": "rotateY("+currdeg+"deg)",
       "-o-transform": "rotateY("+currdeg+"deg)",
       "transform": "rotateY("+currdeg+"deg)"
     });
   }
   });
  

 