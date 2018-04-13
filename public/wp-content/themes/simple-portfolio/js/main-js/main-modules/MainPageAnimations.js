import $ from 'jquery';

class MainPageAnimations {

  constructor() {
    this.pathWrapper = $('.path-outer-wrapper');
    this.pathLine = $('.path-line__line');
    this.experiencePosition = parseInt($('.experience-wrapper').offset().top) - 250;

    this.skillBars = $('.skill-bar');
    this.professionalPosition = parseInt($('.professional-wrapper').offset().top) - 350;

    this.experienceAnimationState = false;
    this.professionalAnimationState = false;

    this.events();
    
  }

  events() {
    $(window).scroll(() => {
      var scrollPosition = $(window).scrollTop() + window.innerHeight - 550;
      if (this.experiencePosition < scrollPosition && !this.experienceAnimationState) {
        this.experienceSectionAnimations();
        this.experienceAnimationState = true;
      }
      if (this.professionalPosition < scrollPosition && !this.professionalAnimationState) {
        this.professionalSectionAnimations();
        this.professionalAnimationState = true;
      }
    });
  }

  experienceSectionAnimations() {
      
    for (var i = 0; i < this.pathWrapper.length; i++) {
      this.setAnimation(this.pathWrapper, i, 300);
    }

    for (var i = 0; i < this.pathLine.length-1; i++) {
      this.setAnimation(this.pathLine, i, 300);
    }

  }

  professionalSectionAnimations() {
    for (var i = 0; i < this.skillBars.length; i++) {
      this.setAnimation(this.skillBars, i, 100);
    }
  }

  setAnimation(item, i, time) {
    var target = $(item[i]);

    setTimeout(function () {
      target.addClass('active');
    }, i * time);

  }

}

export default MainPageAnimations;