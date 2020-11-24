$(document).ready(function($){
	// console.log('Helo');
  //Использование параметра completed
  $("#phone").mask("8(999) 999-9999", {
    completed: function(){ 
	$("#name").addClass("green_border");
	$("#phone").addClass("green_border");

     }
  });
 //    $("#name").mask("", {
 //    completed: function(){ 
	// $("#name").addClass("green_border");
 //     }
 //  });
});