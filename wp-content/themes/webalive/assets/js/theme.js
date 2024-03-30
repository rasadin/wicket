;(function($) {

    // Scroll to Top
    // $(window).scroll(function(){
    //     if($(this).scrollTop()>100){
    //         $("#up").fadeIn();
    //     }else{
    //         $("#up").fadeOut();
    //     }
    // });

    $("#up").click(function(){
        $("html, body").animate({scrollTop:0},1000)
    });


    // jQuery(document).ready(function($) {
    //     $('.focus-part').click(function() {
    //         $(this).next('.social-connection-group').slideToggle();
    //     });
    // });
    
})(jQuery);