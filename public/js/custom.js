$(document).ready(function($){

    /**
     * Initiate priorityNav
     */
    var wrapper = document.querySelector(".nav-wrapper");
    var nav = priorityNav.init({
        mainNavWrapper: ".nav-wrapper", // mainnav wrapper selector (must be direct parent from mainNav)
        mainNav: ".nav-ul", // mainnav selector. (must be inline-block)
        navDropdownLabel: 'test',
        navDropdownClassName: "nav__dropdown", // class used for the dropdown.
        navDropdownToggleClassName: "nav__dropdown-toggle", // class used for the dropdown toggle.
    });

    var nav2 = priorityNav.init({
        mainNavWrapper: ".topnav-wrapper", // mainnav wrapper selector (must be direct parent from mainNav)
        mainNav: ".nav-ul", // mainnav selector. (must be inline-block)
        navDropdownLabel: 'test2',
        navDropdownClassName: "nav__dropdown", // class used for the dropdown.
        navDropdownToggleClassName: "nav__dropdown-toggle", // class used for the dropdown toggle.
    });


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