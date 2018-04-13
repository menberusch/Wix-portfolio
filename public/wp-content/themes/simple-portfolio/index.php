<?php get_header(); ?>

<div class="root-wrapper">

  <div class="backgrounds-wrapper">
    <div class="backgrounds-wrapper__bg-wrapper" id="home-bg"></div>
    <div class="backgrounds-wrapper__bg-wrapper" id="professional-bg"></div>
    <div class="backgrounds-wrapper__bg-wrapper" id="experience-bg"></div>
    <div class="backgrounds-wrapper__bg-wrapper" id="contact-bg"></div>
  </div>

  <div class="content-wrapper">
    <div class="content-wrapper__container container">

    <!-- HOME -->
      <div class="home-wrapper section" id="homeSection">  
        <h1 class="home-wrapper__heading">I<span class="third-color-font">'</span>m<br>
            Nice<br>
            Guy <span class="third-color-font">c:</span>
        </h1>
        <p class="home-wrapper__subtitle">Very nice &amp; good guy</p>
      </div>

    <!-- RESUME -->
      <div class="resume-wrapper section-wrapper">
        <div class="resume-wrapper__logo logo logo--big"><a href="/">R</a></div>
        <p class="resume-wrapper__description">I'M A PARAGRAPH. CLICK HERE TO ADD YOUR OWN TEXT AND EDIT ME. IT’S EASY. JUST CLICK “EDIT TEXT” OR DOUBLE CLICK ME TO ADD YOUR OWN CONTENT AND MAKE CHANGES TO THE FONT. FEEL FREE TO DRAG AND DROP ME ANYWHERE YOU LIKE ON YOUR PAGE.</p>
        <a href="#" class="resume-wrapper__download">DOWNLOAD RESUME</a>
      </div>
      
    <!-- PROFESSIONAL -->
      <div class="professional-wrapper section section-wrapper" id="professionalSection">
        <div class="section-title">
          <h2 class="section-title__title"><span class="secondary-font-color">01</span> Professional</h2>
          <span class="section-title__subtitle">my knowledge level in software</span>
        </div>

        <ul class="skill-bars-wrapper">
          <li class="skill-bar">
            <div class="skill-bar__text">wordpress</div>
            <div class="skill-bar__bar skill-bar__bar--wordpress"></div>
            <div class="skill-bar__text">75%</div>
          </li>
          <li class="skill-bar">
            <div class="skill-bar__text">drupal</div>
            <div class="skill-bar__bar skill-bar__bar--drupal"></div>
            <div class="skill-bar__text">70%</div>
          </li>
          <li class="skill-bar">
            <div class="skill-bar__text">wix</div>
            <div class="skill-bar__bar skill-bar__bar--wix"></div>
            <div class="skill-bar__text">95%</div>
          </li>
          <li class="skill-bar">
            <div class="skill-bar__text">photoshop</div>
            <div class="skill-bar__bar skill-bar__bar--photoshop"></div>
            <div class="skill-bar__text">85%</div>
          </li>
          <li class="skill-bar">
            <div class="skill-bar__text">illustrator</div>
            <div class="skill-bar__bar skill-bar__bar--illustrator"></div>
            <div class="skill-bar__text">80%</div>
          </li>
          <li class="skill-bar">
            <div class="skill-bar__text">javascript</div>
            <div class="skill-bar__bar skill-bar__bar--javascript"></div>
            <div class="skill-bar__text">85%</div>
          </li>
          <li class="skill-bar">
            <div class="skill-bar__text">html &amp; css</div>
            <div class="skill-bar__bar skill-bar__bar--html-css"></div>
            <div class="skill-bar__text">80%</div>
          </li>
        </ul>
      </div>

      <!-- PORTFOLIO -->
      <div class="portfolio-wrapper section-wrapper section" id="portfolioSection">
        <div class="section-title">
          <h2 class="section-title__title"><span class="secondary-font-color">02</span> portfolio</h2>
          <span class="section-title__subtitle">my latest work. <a href="<?php echo site_url('/portfolio'); ?>" class="secondary-font-color">see more ></a></span>
        </div>

        <div class="portfolio-excerpt">
          <?php 
          $portfolioExcerpt = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'orderby' => 'date'
          ));
          while($portfolioExcerpt->have_posts()) {
          $portfolioExcerpt->the_post();
          ?>
            <a href="<?php echo site_url('/portfolio'); ?>" class="portfolio-excerpt__image">
              <span class="portfolio-excerpt__black"></span>
              <img src="<?php echo the_post_thumbnail_url('medium'); ?>" alt="portfolio-<?php the_ID(); ?>">
            </a>
          <?php } 
          wp_reset_postdata();?>
        </div>
      </div>

      <!-- EXPERIENCE -->
      <div class="experience-wrapper section-wrapper section" id="experienceSection">
        <div class="section-title">
          <h2 class="section-title__title "><span class="secondary-font-color">03</span> experience</h2>
        </div>

        <div class="experience-path">

        <!-- PATH POINTS BLOCK -->
          <div class="path-outer-wrapper">
          
            <div class="path-line">
              <span class="path-line__start"></span>
              <span class="path-line__line"></span>
            </div>

            <div class="path-inner-wrapper">
              <span class="path-inner-wrapper__year">2014-2016</span>
              <h3 class="path-inner-wrapper__company-name">hop!</h3>
              <p class="path-inner-wrapper__job-info">
                <strong>Creative Design Lead</strong><br>
                I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.
              </p>
            </div>

          </div>
        <!-- PATH POINTS BLOCK -->
          <div class="path-outer-wrapper">
          
            <div class="path-line">
              <span class="path-line__start"></span>
              <span class="path-line__line"></span>
            </div>

            <div class="path-inner-wrapper">
              <span class="path-inner-wrapper__year">2012-2014</span>
              <h3 class="path-inner-wrapper__company-name">wisboom</h3>
              <p class="path-inner-wrapper__job-info">
                <strong>Associate Desing Director</strong><br>
                I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.
              </p>
            </div>

          </div>
        <!-- PATH POINTS BLOCK -->
          <div class="path-outer-wrapper">
          
            <div class="path-line">
              <span class="path-line__start"></span>
              <span class="path-line__line"></span>
            </div>

            <div class="path-inner-wrapper">
              <span class="path-inner-wrapper__year">2011-2012</span>
              <h3 class="path-inner-wrapper__company-name">snap up</h3>
              <p class="path-inner-wrapper__job-info">
                <strong>Director of Design</strong><br>
                I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.
              </p>
            </div>

          </div>
        <!-- PATH POINTS BLOCK -->
          <div class="path-outer-wrapper">
          
            <div class="path-line">
              <span class="path-line__start"></span>
              <span class="path-line__line"></span>
            </div>

            <div class="path-inner-wrapper">
              <span class="path-inner-wrapper__year">2006-2011</span>
              <h3 class="path-inner-wrapper__company-name">gdv</h3>
              <p class="path-inner-wrapper__job-info">
                <strong>UI/UX Design</strong><br>
                I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.
              </p>
            </div>

          </div>
        <!-- PATH POINTS BLOCK -->
          <div class="path-outer-wrapper">
          
            <div class="path-line">
              <span class="path-line__start"></span>
              <span class="path-line__line"></span>
            </div>

            <div class="path-inner-wrapper">
              <span class="path-inner-wrapper__year">2005-2006</span>
              <h3 class="path-inner-wrapper__company-name">blue app</h3>
              <p class="path-inner-wrapper__job-info">
                <strong>UI/UX Design</strong><br>
                I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.
              </p>
            </div>

          </div>
        <!-- PATH POINTS BLOCK -->
          <div class="path-outer-wrapper">
          
            <div class="path-line">
              <span class="path-line__start"></span>
              <span class="path-line__line"></span>
            </div>


            <div class="path-inner-wrapper">
              <span class="path-inner-wrapper__year">2004-2005</span>
              <h3 class="path-inner-wrapper__company-name">marble</h3>
              <p class="path-inner-wrapper__job-info">
                <strong>UI Design</strong><br>
                I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.
              </p>
            </div>

          </div>

        </div>
        
      </div>

      <!-- CONTACT -->
      <div class="contact-wrapper section" id="contactSection">
        
        <div class="contact-text">
          <h3 class="contact-text__headline">contact</h3>
          <p class="contact-text__paragraph">
          I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.<br><br>
          info@mysite.com<br>
          Tel: 1-800-000-0000
          </p>
        </div>
      
        <form class="contact-form">
          <input type="text" class="contact-form__name-input" placeholder="Name *" required>
          <input type="email" class="contact-form__email-input" placeholder="Email *" required>
          <input type="text" class="contact-form__subject-input" placeholder="Subject *" required>
          <textarea class="contact-form__textarea-message" placeholder="Message *" required></textarea>
          <button type="submit" class="contact-form__submit-btn">Send</button>
        </form>

        <?php get_template_part('template-parts/socials'); ?>
      
      </div>

    </div>
  </div>
  
</div>
<?php 
wp_enqueue_script('index-scripts', get_theme_file_uri('/js/main-scripts-bundled.js'), NULL, 1, true);
get_footer(); 
?>