//10templates.com JavaScript Document
jQuery(

    function(){
    jQuery('.nav .dropdown').hover(function() {
        jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(0).slideDown();
    }, 
    function(){
        jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(0).slideUp()
    });

    //jQuery(".panel").delay(800).toggle("slow");
    jQuery(".trigger").click(function(){
    	jQuery(".panel").toggle("slow");
		jQuery(this).toggleClass("active");
	});

});

