<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body>

<header class="site-header">
  <div class="gradient-bg">

    <div class="site-header__container container section-wrapper">

      <div class="site-header__logo logo"><a href="/">R</a></div>

      <div class="mobile-btn">
        <div class="mobile-btn__bar bar1"></div>
        <div class="mobile-btn__bar bar2"></div>
        <div class="mobile-btn__bar bar3"></div>
      </div>

      <div class="mobile-menu-overlay">
      </div>
      
      <nav class="nav-menu secondary-font-color">
        <span class="nav-menu__item item">
          <a class="menu-link" id="homeLink" href="<?php
          if(is_home()){
            echo '#homeSection';  
          }else{
            echo site_url();
          } ?>">HOME</a>
        </span>
        <span class="nav-menu__item item">
          <a class="menu-link" id="professionalLink" href="<?php
          if(is_home()){
            echo '#professionalSection';  
          }else{
            echo site_url('/#professionalSection');
          } ?>">PROFESSIONAL</a>
        </span>
        <span class="nav-menu__item item <?php if(is_page('portfolio')) echo 'active'; ?>">
          <a class="menu-link" id="portfolioLink" href="<?php echo site_url('/portfolio'); ?>">PORTFOLIO</a>
        </span>
        <span class="nav-menu__item item">
          <a class="menu-link" id="experienceLink" href="<?php
          if(is_home()){
            echo '#experienceSection';  
          }else{
            echo site_url('/#experienceSection');
          } ?>">EXPERIENCE</a>
        </span>
        <span class="nav-menu__item item">
          <a class="menu-link" id="contactLink" href="<?php
          if(is_home()){
            echo '#contactSection';  
          }else{
            echo site_url('/#contactSection');
          } ?>">CONTACT</a>
        </span>
        
      </nav>

    </div>

  </div>
</header>