import $ from 'jquery';

class ToTopBtn {

  constructor() {
    this.scrollPosArr = [$(window).scrollTop()];
    this.toTopBtn = $('.to-top-btn');
    this.events();
  }

  events() {
    $(window).scroll(() => {
      this.detectScrollUp();
    });

    this.toTopBtn.click(() => {
      $('body, html').animate({
        scrollTop: 0
      }, 1300);
    });
  }

  detectScrollUp() {
    var scrollPos = $(window).scrollTop();

    this.scrollPosArr.push(scrollPos);
    
    if (this.scrollPosArr.length >= 3) {
      this.scrollPosArr.shift();
      this.scrollUp = this.scrollPosArr[0] > this.scrollPosArr[1];
    }

    if(scrollPos === 0) {
      this.toTopBtn.fadeOut('slow');
    } else {
      if (this.scrollUp && !this.toTopState) {
        this.toTopBtn.fadeIn('fast');
        this.toTopState = true;
      } else if (this.toTopState && !this.scrollUp) {
        this.toTopBtn.fadeOut('slow');
        this.toTopState = false;
      }
    }
  }

}

export default ToTopBtn;