jQuery(document).ready(function() {
	
	"use strict";
  // Your custom js code goes here.
  
  
  $(function(){
    $("#navbar").load("nav.html");
  });

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

   function on() {
			document.getElementById("overlay").style.display = "block";
  }
  
  function off() {
			document.getElementById("overlay").style.display = "none";
  }

  $(document).ready(function(){
    $("#navbar").load("nav.html");
  });

  

 