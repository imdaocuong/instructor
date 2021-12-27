$(window).scroll(function(){
    if($(document).scrollTop() > 70){
        $('.navbar_bottom').addClass('fix-nav');
    }
    else{
        $('.navbar_bottom').removeClass('fix-nav');
    }
});