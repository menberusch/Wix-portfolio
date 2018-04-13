import $ from 'jquery';
import GalleryItemsHover from './GalleryItemsHover';

class GalleryOverlayCarousel{
  
  constructor() {
    this.slides = $('.carousel-slide');
    this.overlayCarousel = $('.portfolio-overlay-carousel');
    this.sharingBtn = this.overlayCarousel.find('.sharing-button');
    this.socials = this.sharingBtn.next();
    this.fullScreenBtn = $('.fullscreen-mode');
    this.slider = $('.slider-wrapper')[0];
    this.events();
  }


  events() {

    // desktop events

    $('.black-hover').click((e) => {
      this.openOverlay(e);   
      $('body').keyup((e) => {
        if (e.which === 37 && this.currentSlideIndex !== 0) {
          this.changeSlide(-1);
        }
        if (e.which === 39 && this.currentSlideIndex !== this.slides.length - 1) {
          this.changeSlide(1);
        }
        if (e.which === 27) {
          this.exitOverlay();
        }
      });
    });

    $('#exit-overlay').click(()=>{
      this.exitOverlay();
    });

    $('.prev').click(()=>{
      this.changeSlide(-1);
    });

    $('.next').click(()=>{
      this.changeSlide(1);
    });

    this.socials.on('mouseenter mouseleave', ()=>{
      this.toggleDisplayedHover();
    });
    
    this.sharingBtn.on('mouseenter mouseleave', ()=>{
      this.toggleDisplayedHover();
    }).click((e)=>{
      if(window.matchMedia('(max-width: 600px)').matches){
        $(e.target).closest('.sharing-button').toggleClass('mobile-clicked');
        $('#exit-overlay').toggleClass('fadeToggle');
      }
      $(e.target).closest('.sharing-button').next().toggleClass('displayed-click');
    });

    this.fullScreenBtn.click(()=>{
      this.toggleFullscreen(this.overlayCarousel[0]);
    });

    // Mobile only events
    this.slider.addEventListener('touchstart', (e) => {
      this.startXposition = e.touches[0].pageX;
      this.startYposition = e.touches[0].pageY;
    });
    this.slider.addEventListener('touchmove', (e) => {
      this.endXposition = e.touches[0].pageX;
      this.endYposition = e.touches[0].pageY;
    });

    this.slider.addEventListener('touchend', (e) => {
      if (Math.abs(this.startYposition - this.endYposition) < 100) {
        if (this.startXposition < this.endXposition && this.currentSlideIndex !== 0) {
          this.changeSlide(-1);
        }
        if (this.startXposition > this.endXposition && this.currentSlideIndex !== this.slides.length - 1) {
          this.changeSlide(1);
        }
      }
    });

    if (window.matchMedia('(max-width: 600px)').matches) {
      this.sharingBtn.off('mouseenter mouseleave');
      this.socials.off('mouseenter mouseleave');
    }
  }

  toggleFullscreen(elem = document.documentElement) {
    this.overlayCarousel.toggleClass('fullscreen');
    if (!document.fullscreenElement && !document.mozFullScreenElement &&
      !document.webkitFullscreenElement && !document.msFullscreenElement) {
      if (elem.requestFullscreen) {
        elem.requestFullscreen();
      } else if (elem.msRequestFullscreen) {
        elem.msRequestFullscreen();
      } else if (elem.mozRequestFullScreen) {
        elem.mozRequestFullScreen();
      } else if (elem.webkitRequestFullscreen) {
        elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
      }
    } else {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      }
    }
  }

  toggleDisplayedHover(){
    this.socials.toggleClass('displayed-hover');
  }

  openOverlay(e){
    var clickedID = $(e.target).closest('.gallery-item').data('group-id');

    this.slides.each((i, slide) => {
      if ($(slide).data('group-id') === clickedID) {
        this.currentSlideIndex = clickedID;
        $(slide).css('display', 'flex').addClass('current-slide');
        this.overlayCarousel.addClass('displayed');
        setTimeout(() => { $('body').css('overflow', 'hidden') }, 200);

        if (clickedID === 0) {
          $('.prev').prop('disabled', true);
        } else if (clickedID === this.slides.length - 1) {
          $('.next').attr('disabled', true);
        }
      }
    });
  }

  exitOverlay() {
    this.overlayCarousel.removeClass('displayed');

    $('.prev').prop('disabled', false);
    $('.next').prop('disabled', false);

    this.slides.each((i, slide) => {
      if ($(slide).hasClass('current-slide')) {
        $(slide).css('display', 'none').removeClass('current-slide');
        $('body').css('overflow', 'auto');
      }
    });
    $('body').off('keyup');
  }

  changeSlide(n) {
    this.currentSlideIndex += n;

    if(this.currentSlideIndex === 0){
      $('.prev').prop('disabled', true);
    }else{
      $('.prev').prop('disabled', false);
    }
    if (this.currentSlideIndex === this.slides.length - 1) {
      $('.next').attr('disabled', true);
    }else {
      $('.next').attr('disabled', false);
    }

    this.slides.each((i, slide)=>{
      if($(slide).hasClass('current-slide')){
        $(slide).css('display','none').removeClass('current-slide');
      }
    });

    $(this.slides[this.currentSlideIndex]).css('display','flex').hide().fadeIn(100, 'linear', function(){
      $(this).addClass('current-slide');
    });
  }

}

export default GalleryOverlayCarousel;