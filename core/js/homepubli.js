/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery(document).ready(function(e) {
    jQuery('.publiz1').append('<div class="publiz1Up">Publicidad</div>')
    jQuery('.publiz2').append('<div class="publiz2Up">Publicidad</div>')
    jQuery('header .ancho').append('<div class="publizLeftUp">Publicidad</div>')
    jQuery('header .ancho').append('<div class="publizRightUp">Publicidad</div>')

    jQuery('.contentmain').prepend('<div class="publizPushDown"><div class="publizPush2Up">Publicidad</div></div>');
    jQuery('footer .barra-pie').append("<div class='publizPushUp'>Publicidad<div class='publizPush2Up'>Publicidad</div></div>");
    jQuery('aside .publicidad').append("<div class='publizPushLeftZ3'>Publicidad</div>");
})



(function($) {

    // Defining our jQuery plugin

    $.fn.pan_modal_box = function(prop) {

        // Default parameters

        var options = $.extend({
            height: "250",
            width: "500",
            title: "JQuery Modal Box Demo",
            description: "Example of how to create a modal box.",
            top: "20%",
            left: "30%"
        }, prop);

        return this.click(function(e) {
            //Do stuff here
        });

        return this;
    };


    /*  Laterales*/
    $('header .ancho').append('<div class="publizLeftUp">' + PubliLateralIzda() + '</div>');
    $('header .ancho').append('<div class="publizRightUp">' + PubliLateralDcha() + '</div>');






    /* Lateral id 202 */
    function PubliLateralIzda() {
        return "<a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?zoneid=223' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=223&amp;cb=INSERT_RANDOM_NUMBER_HERE' border='0' alt='' /></a>";
    };

    function PubliLateralDcha() {
        return "<a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?zoneid=224' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=224&amp;cb=INSERT_RANDOM_NUMBER_HERE' border='0' alt='' /></a>";
    };



})(jQuery);

$('.publi').pan_modal_box();