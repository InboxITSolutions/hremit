$(document).ready(function() {
    var navOffset = jQuery("#navigation").offset().top;
        jQuery(window).scroll(function(){
         var scrollPos= jQuery(window).scrollTop();
       alert(scrollPos);
        /*if(scrollPos>=650){
             jQuery("#navigation").addClass("nav-fixed");
         }
         else{
             jQuery("#navigation").removeClass("nav-fixed");
         }*/
     });
    });