(function($) {
        $.fn.extend({
                leanModal: function(options) {

                        var defaults = {
                                top: 100,
                                overlay: 0.5,
                                closeButton: null
                        }

                        var overlay = $("<div id='lean_overlay'></div>");

                        $("body").append(overlay);

                        options = $.extend(defaults, options);

                        return this.each(function() {

                                var o = options;

                                $(this).click(function(e) {

                                        var modal_id = $(this).attr("href");

                                        $("#lean_overlay").click(function() {
                                                close_modal(modal_id);
                                        });

                                        $(o.closeButton).click(function() {
                                                close_modal(modal_id);
                                        });

                                        var modal_height = $(modal_id).outerHeight();
                                        var modal_width = $(modal_id).outerWidth();

                                        $('#lean_overlay').css({
                                                'display': 'block',
                                                opacity: 0
                                        });

                                        $('#lean_overlay').fadeTo(200, o.overlay);

                                        $(modal_id).css({

                                                'display': 'block',
                                                'position': 'fixed',
                                                'opacity': 0,
                                                'z-index': 11000,
                                                'left': 50 + '%',
                                                'margin-left': -(modal_width / 2) + "px",
                                                'top': o.top + "px"

                                        });

                                        $(modal_id).fadeTo(200, 1);

                                        e.preventDefault();

                                });

                        });

                        function close_modal(modal_id) {

                                $("#lean_overlay").fadeOut(200);

                                $(modal_id).css({
                                        'display': 'none'
                                });

                        }

                }
        });

})(jQuery);

// Plugin options and our code
$("#modal_trigger").leanModal({
        top: 100,
        overlay: 0.6,
        closeButton: ".modal_close"
});

$(function() {
        // Calling Login Form
        $("#login_form").click(function() {
                $(".social_login").hide();
                $(".user_login").show();
                return false;
        });

        // Calling Register Form
        $("#register_form").click(function() {
                $(".social_login").hide();
                $(".user_register").show();
                $(".header_title").text('Register');
                return false;
        });

        // Going back to Social Forms
        $(".back_btn").click(function() {
                $(".user_login").hide();
                $(".user_register").hide();
                $(".social_login").show();
                $(".header_title").text('Login');
                return false;
        });
});









// Create Account
// (function($) {
//         $.fn.extend({
//                 leanModal1: function(options) {

//                         var defaults = {
//                                 top: 100,
//                                 overlay: 0.5,
//                                 closeButton: null
//                         }

//                         var overlay = $("<div id='lean_overlay1'></div>");

//                         $("body").append(overlay);

//                         options = $.extend(defaults, options);

//                         return this.each(function() {

//                                 var o = options;

//                                 $(this).click(function(e) {

//                                         var modal_id1 = $(this).attr("href");

//                                         $("#lean_overlay1").click(function() {
//                                                 close_modal(modal_id1);
//                                         });

//                                         $(o.closeButton).click(function() {
//                                                 close_modal(modal_id1);
//                                         });

//                                         var modal_height = $(modal_id1).outerHeight();
//                                         var modal_width = $(modal_id1).outerWidth();

//                                         $('#lean_overlay1').css({
//                                                 'display': 'block',
//                                                 opacity: 0
//                                         });

//                                         $('#lean_overlay1').fadeTo(200, o.overlay);

//                                         $(modal_id1).css({

//                                                 'display': 'block',
//                                                 'position': 'fixed',
//                                                 'opacity': 0,
//                                                 'z-index': 11000,
//                                                 'left': 50 + '%',
//                                                 'margin-left': -(modal_width / 2) + "px",
//                                                 'top': o.top + "px"

//                                         });

//                                         $(modal_id1).fadeTo(200, 1);

//                                         e.preventDefault();

//                                 });

//                         });

//                         function close_modal(modal_id1) {

//                                 $("#lean_overlay1").fadeOut(200);

//                                 $(modal_id1).css({
//                                         'display': 'none'
//                                 });

//                         }

//                 }
//         });

// })(jQuery);

// // Plugin options and our code
// $("#modal_trigger1").leanModal1({
//         top: 100,
//         overlay: 0.6,
//         closeButton: ".modal_close"
// });

// $(function() {
//         // Calling Login Form
//         $("#login_form1").click(function() {
//                 $(".social_login").hide();
//                 $(".user_login").show();
//                 return false;
//         });

//         // Calling Register Form
//         $("#register_form1").click(function() {
//                 $(".social_login").hide();
//                 $(".user_register").show();
//                 $(".header_title").text('Register');
//                 return false;
//         });

//         // Going back to Social Forms
//         $(".back_btn").click(function() {
//                 $(".user_login").hide();
//                 $(".user_register").hide();
//                 $(".social_login").show();
//                 $(".header_title").text('Login');
//                 return false;
//         });
// });