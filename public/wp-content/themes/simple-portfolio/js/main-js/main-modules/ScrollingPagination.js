import $ from 'jquery';
import { toggleMenu } from '../../func/toggleMenu';

class ScrollingPagination {

  constructor() {
    this.menuLinks = $('.site-header').find('.item');

    this.sections = $('.section');

    this.events();

    this.activeNavLinks(); 
    
    this.scrollingHeader();
  }

  // events
  events() {
    $(window).scroll(() => {
      this.activeNavLinks();
    });

    $('.menu-link').click((e)=>{
      this.sectionScrollingAnimation(e);
    });
      
    if(window.matchMedia('(min-width: 600px)').matches){
      $(window).scroll(() => {
        this.scrollingHeader();
      });
    }

  }

  // methods
  scrollingHeader() {
    var scrollPosition = $(window).scrollTop();

    if (scrollPosition > 0 && !$('.site-header').hasClass('scrolled')) {
      $('.site-header').addClass('scrolled');
    } else if (scrollPosition === 0) {
      $('.site-header').removeClass('scrolled');
    }
  }

  sectionScrollingAnimation(e) {

    var animateScroll = (position) =>{
      window.matchMedia('(max-width: 786px)').matches ? toggleMenu() : null;
      e.preventDefault();
      $('body, html').animate({
        scrollTop: position
      }, 1300);
    };

    if (e.target.id === 'homeLink'){
      animateScroll(0);
    }else if (e.target.id !== 'portfolioLink') {
      var pos;
      if (window.matchMedia('(max-width: 600px)').matches){
        pos = 30;
      } else if (window.matchMedia('(min-width: 1366px) and (max-width: 1600px)').matches){
        pos = 80;
      } else {
        pos = 130;
      }
      var position = $($(e.target).attr('href')).offset().top - pos;
      animateScroll(position);
    }
  }

  activeNavLinks() {

    var scrollPosition = $(window).scrollTop(),
        menuLength = this.menuLinks.length - 1;

    this.menuLinks.each((i, link) => {
      let j = i + 1;
      var sectionPos = $(this.sections[i]).offset().top - 350;

      if (i < menuLength) {

        if (sectionPos <= scrollPosition && scrollPosition < $(this.sections[j]).offset().top - 350) {
          $(link).addClass('active');
        } else {
          $(link).removeClass('active');
        }

      } else if (i === menuLength) {

        if (sectionPos <= scrollPosition) {
          $(link).addClass('active');
        } else {
          $(link).removeClass('active');
        }

      }
    });
  }
}

export default ScrollingPagination;