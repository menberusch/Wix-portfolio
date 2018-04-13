<?php
get_header();
?>

<div class="portfolio-page">

  <div class="portfolio-gallery">
    <?php
      $posts = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'post',
        'orderby' => 'date'
      ));
      $index = 0;
      while($posts->have_posts()){ 
        $posts->the_post(); ?>

      <div class="gallery-item" data-group-id="<?php echo $index; ?>">

        <div class="gallery-item__title"><?php the_title(); ?></div>
        
        <img class="gallery-item__image" src="<?php echo the_post_thumbnail_url('full'); ?>">

        <div class="gallery-item__hover">
          <span class="sharing-button"><i class="fas fa-bullhorn"></i></span>
          <div class="gallery-item__socials">
            <?php get_template_part('template-parts/socials'); ?>
          </div>
          <div class="black-hover"></div>
        </div>

      </div>
      
    <?php $index++;
    }
    ?>
  </div>

  <div class="portfolio-overlay-carousel">

    <div class="portfolio-overlay-carousel__container">

      <div class="portfolio-overlay-carousel__header">

        <div class="fullscreen-mode">
            <span class="fullscreen-mode__top-side arrow">&#8599;</span>
            <span class="fullscreen-mode__bot-side arrow">&#8601;</span>
        </div>
            
        <div class="portfolio-overlay-carousel__socials">
          <div class="sharing-button">
            <i class="fas fa-bullhorn"></i>
            <i class="fas fa-times"></i>
          </div>
          <ul class="contact-socials">
            <li class="contact-socials__item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
                <span class="socials-label">Facebook</span>
              </a>
            </li>
            <li class="contact-socials__item">
              <a href="#">
                <i class="fab fa-twitter"></i>
                <span class="socials-label">Twitter</span>
              </a>
            </li>
            <li class="contact-socials__item">
              <a href="#">
                <i class="fab fa-pinterest"></i>
                <span class="socials-label">Pinterest</span>
              </a>
            </li>  
            <li class="contact-socials__item">
              <a href="#">
                <i class="fab fa-tumblr"></i>
                <span class="socials-label">Tumblr</span>
              </a>
            </li>
            <li class="contact-socials__item">
              <a href="#">
                <i class="fas fa-envelope"></i>
                <span class="socials-label">Email</span>
              </a>
            </li>
          </ul>
        </div>

        <div id="exit-overlay" class="portfolio-overlay-carousel__exit">
          <div class="exit-bar exit-bar--1"></div>
          <div class="exit-bar exit-bar--2"></div>
        </div>

      </div>

      <button class="prev carousel-btn">&#10094;</button>
      <button class="next carousel-btn">&#10095;</button>
      
      <div class="slider-wrapper">
        <?php
        $index = 0;
        while($posts->have_posts()){ 
        $posts->the_post(); ?>
          <div class="slider-wrapper__item carousel-slide" data-group-id="<?php echo $index; ?>">

            <div class="slider-wrapper__image slide-content">
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="project-id-<?php the_ID(); ?>">
            </div>

            <div class="slider-wrapper__text slide-content">
              <h2 class="slide-content__title"><?php the_title(); ?></h2>
              <p class="slide-content__desc"><?php echo get_the_content(); ?></p>
            </div>
            
          </div>
        <?php $index++; 
        }
        ?>
      </div>

    </div>

  </div>

</div>
<?php
wp_enqueue_script('portfolio-scripts', get_theme_file_uri('/js/portfolio-scripts-bundled.js'), NULL, 1, true);
get_footer();
?>

