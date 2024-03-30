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


 
    jQuery(document).ready(function($) {
        // Copy number/link function
        function copyText(text) {
            var temp = $('<input>');
            $('body').append(temp);
            temp.val(text).select();
            document.execCommand('copy');
            temp.remove();
        }
    
        // Copy button click event
        $('.copy-btn').click(function() {
            var $value2 = $(this).siblings('.value-2');
            var valueToCopy = $value2.text().trim();
            console.log('Value to copy:', valueToCopy); // Log the value to be copied
            console.log('Value-2 element:', $value2); // Log the value-2 element for further inspection
            copyText(valueToCopy);
            // Optionally, you can provide feedback to the user that the text has been copied.
            alert('Copied: ' + valueToCopy);
        });
    
        // Toggle social-connection-group
        $('.focus-part').click(function() {
            $(this).next('.social-connection-group').slideToggle();
        });
    });
    
})(jQuery);