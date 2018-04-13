import $ from 'jquery';
import { toggleMenu } from '../../func/toggleMenu';

class MobileMenu {

  constructor() {
    this.mobileBtn = $('.mobile-btn');
    this.navMenu = $('.nav-menu');
    this.menuOver = $('.mobile-menu-overlay');
    this.mobileMenuState = false;
    this.setMobileMenu();
    this.events();
  }

  events() {
    $('.mobile-btn').click(()=>{
      toggleMenu();
    })

    $(window).resize(()=>{
      this.setMobileMenu();
    });
  }

  setMobileMenu(){
    if (window.matchMedia('(max-width: 786px)').matches && !this.mobileMenuState) {
      this.navMenu.appendTo(this.menuOver);
      this.mobileBtn.css('display', 'inline-block');
      this.mobileMenuState = true;
    } else if (window.matchMedia('(min-width: 786px)').matches && this.mobileMenuState){
      this.navMenu.appendTo('.site-header__container');
      this.mobileBtn.removeClass('pressed');
      this.menuOver.fadeOut('fast');
      $('body').css('overflow', 'auto');
      this.mobileBtn.css('display', 'none');
      this.mobileMenuState = false;
    }
  }

}

export default MobileMenu;