import $ from 'jquery';

class BgSetting {

  constructor() {
    this.setBg();
    $(window).resize(()=>{
      this.setBg();
    })
  }

  setBg(){
    var sections = $('.content-wrapper>div>div'),
      sH = {};

    // Keys .home-wrapper = home,
    //      .resume-wrapper = resume.. etc
    sections.each((i, section) => {
      var key = $(section).attr('class').substring(0, $(section).attr('class').indexOf('-')),
        secHeight = parseFloat($(section).css('height')),
        secMTop = parseFloat($(section).css('margin-top')),
        secMBot = parseFloat($(section).css('margin-bottom')),
        sumHeight = secHeight + secMTop + secMBot;

      sH[key] = {
        height: sumHeight,
        'sec-height': secHeight,
        'margin-top': secMTop,
        'margin-bottom': secMBot
      }
    });

    var homeBg = sH.home.height + sH.resume['sec-height'] / 2,
      professionalBg = sH.professional.height + sH.resume['sec-height'] / 2 + sH.resume['margin-bottom'],
      experienceBg = sH.portfolio.height + sH.experience.height + sH.contact['sec-height'] / 2,
      contactBg = sH.contact['sec-height'] / 2 + sH.contact['margin-bottom'];

    $('#home-bg').css('height', homeBg);
    $('#professional-bg').css('height', professionalBg);
    $('#experience-bg').css('height', experienceBg);
    $('#contact-bg').css('height', contactBg);
  }
}

export default BgSetting;