import $ from 'jquery';

import MobileMenu from './modules/MobileMenu';
import ToTopBtn from './modules/ToTopBtn';

var mobileMenu = new MobileMenu(),
    toTopBtn = new ToTopBtn();

$(window).ready(function(){
    var headerHeight = $('.site-header').css('height'),
        footerHeight = $('.site-footer').css('height'),
        wpAdminBarHeight = (function () {
            if($('body').hasClass('customize-support')){
                if (window.matchMedia('(max-width: 600px)').matches) {
                    return 46;
                } else {
                    return 32;
                }
            } else {
                return 0;
            }
        }());

    $('.portfolio-page').css({ 'padding-top': parseFloat(headerHeight) + wpAdminBarHeight, 'padding-bottom': footerHeight });
    $('.root-wrapper').css({ 'padding-bottom': footerHeight });

});


 