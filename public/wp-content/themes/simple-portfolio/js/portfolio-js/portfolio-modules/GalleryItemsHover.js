import $ from 'jquery';

class GalleryItemsHover {

  constructor() {
    this.portfolioGalleryHover();
  }

  portfolioGalleryHover() {
    $('.gallery-item').mouseenter(function(){
      $(this).addClass('hovered');
      $(this).find('.sharing-button').click(()=>{
        $(this).addClass('shared');
      });
    }).mouseleave(function(){
      $(this).removeClass('shared hovered');
    });
  }
}

export default GalleryItemsHover;