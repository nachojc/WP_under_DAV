jQuery(document).ready(function(e) {
    /*
    jQuery('.contentmain').prepend("<div class='publizPushDown publicidad'><a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?n=a9bb21ea&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=190&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a9bb21ea' border='0' alt='' /></a>\n\
        <div class='publizPush2Up'><a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?n=af64852c&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=189&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=af64852c' border='0' alt='' /></a></div></div>");
    */





    /*  Laterales*/
    jQuery('header .ancho').append('<div class="publizLeftUp">' + PubliLateralIzda() + '</div>');
    jQuery('header .ancho').append('<div class="publizRightUp">' + PubliLateralDcha() + '</div>');
    jQuery('.social-float').css('display', 'none');







    /* Lateral id 223 y 224 */
    function PubliLateralIzda() {
        return "<a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?zoneid=223' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=223&amp;cb=INSERT_RANDOM_NUMBER_HERE' border='0' alt='' /></a>";
    };

    function PubliLateralDcha() {
        return "<a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?zoneid=224' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=224&amp;cb=INSERT_RANDOM_NUMBER_HERE' border='0' alt='' /></a>";
    };



})