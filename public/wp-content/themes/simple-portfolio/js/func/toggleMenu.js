import $ from 'jquery';

export function toggleMenu(){

  $('.mobile-btn').toggleClass('pressed');
  $('.mobile-menu-overlay').fadeToggle('fast');

  if($('.mobile-btn').hasClass('pressed')){
    $('body').css('overflow','hidden');
  } else {
    $('body').css('overflow','auto');
  }

}