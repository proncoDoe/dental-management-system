

$(document).ready(function(){


    $(window).scroll(function(){
    
     if($(this).scrollTop() < 2099){
    
        $('#scroll-top').fadeOut();
    
     }else{
    
        $('#scroll-top').fadeIn();
    
     }
    
    
    
    });
    
    
    });



$(document).ready(function() {
$(".down").click(function() {
     $('html, body').animate({
         scrollTop: $(".up").offset().top
     }, 1500);
 });
});

$(document).ready(function() {
$(".up").click(function() {
     $('html, body').animate({
         scrollTop: $(".down").offset().top
     }, 1000);
 });
});