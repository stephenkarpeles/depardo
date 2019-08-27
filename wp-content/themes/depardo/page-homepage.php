<?php
/**
 * Template Name: Homepage
 * @package depardo
 */

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
    
    <div id="primary" class="content-area">
      <main id="main" class="site-main">

        <?php      
          $hero = get_field('hero'); 
          if( $hero ): ?>

            <section class="hero hero--video">
              <video id="videoBG" poster="poster.JPG" autoplay muted loop>
                <source src="<?php echo $hero['background_video']['url']; ?>" type="video/mp4">
              </video>
              <div class="container slideshow-container">
                <div class="hero__text rotating-slide fade">
                  <h1 class="hero__title"><?php echo $hero['heading_1']; ?></h1>
                  <p class="hero__copy"><?php echo $hero['subheading_1']; ?></p>          
                </div>

                <div class="hero__text rotating-slide fade">
                  <h1 class="hero__title"><?php echo $hero['heading_2']; ?></h1>
                  <p class="hero__copy"><?php echo $hero['subheading_2']; ?></p>          
                </div>

                <div class="hero__text rotating-slide fade">
                  <h1 class="hero__title"><?php echo $hero['heading_3']; ?></h1>
                  <p class="hero__copy"><?php echo $hero['subheading_3']; ?></p>          
                </div>

                <div class="hero__text rotating-slide fade">
                  <h1 class="hero__title"><?php echo $hero['heading_4']; ?></h1>
                  <p class="hero__copy"><?php echo $hero['subheading_4']; ?></p>          
                </div>

                <div class="hero__text rotating-slide fade">
                  <h1 class="hero__title"><?php echo $hero['heading_5']; ?></h1>
                  <p class="hero__copy"><?php echo $hero['subheading_5']; ?></p>          
                </div>

                <div class="dot-wrapper">
                  <span class="slide-dot"></span> 
                  <span class="slide-dot"></span> 
                  <span class="slide-dot"></span> 
                  <span class="slide-dot"></span> 
                  <span class="slide-dot"></span> 
                </div>

              </div>        
            </section>            

        <?php endif; ?> 

        <?php      
          $columns = get_field('columns');  
          if( $columns ): ?>       

            <section class="triple-vert-padding">
              <div class="container">
                <div class="grid text-centered">
                  <div class="col col--1-3">
                    <div class="icon-block">
                      <img class="icon-block__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-man-graph.svg" alt="alt text">
                      <h2 class="icon-block__heading"><?php echo $columns['column_1_text']; ?></h2>
                    </div>
                  </div>
                  <div class="col col--1-3">
                    <div class="icon-block">
                      <img class="icon-block__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-man-clock.svg" alt="alt text">
                      <h2 class="icon-block__heading"><?php echo $columns['column_2_text']; ?></h2>
                    </div>
                  </div>
                  <div class="col col--1-3">
                    <div class="icon-block">
                      <img class="icon-block__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-head-question.svg" alt="alt text">
                      <h2 class="icon-block__heading"><?php echo $columns['column_3_text']; ?></h2>
                    </div>
                  </div>
                </div>
              </div>
            </section>

        <?php endif; ?> 

        <?php      
          $interstitial = get_field('interstitial');  
          if( $interstitial ): ?>

            <section class="featured-block has-overlay-dark" style="background-image: url('<?php echo $interstitial['background_image']['url']; ?>');">
              <div class="container">
                <div class="featured-block__content">
                  <div class="featured-block__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-bulb-arrow.svg" alt="alt text">
                  </div>
                  <div class="featured-block__heading">
                    <h4><?php echo $interstitial['heading']; ?></h4>
                  </div>
                  <div class="featured-block__text">
                    <?php echo $interstitial['copy']; ?>
                  </div>
                </div>
              </div>
            </section>

        <?php endif; ?>

        <?php      
          $imagetext = get_field('image_text_panel'); 
          if( $imagetext ): ?>

            <section class="double-vert-padding">
              <div class="container">
                <div class="grid">
                  <div class="col col--1-2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stock/bird-looks-right.png" alt="alt text">
                  </div>
                  <div class="col col--1-2">
                    <h4 class="color--primary"><?php echo $imagetext['heading']; ?></h4>
                    <?php echo $imagetext['copy']; ?>
                  </div>
                </div>
              </div>
            </section>

        <?php endif; ?>

        <?php      
          $cta = get_field('cta_block'); 
          if( $cta ): ?>

            <section class="cta-block">
              <div class="container">
                <div class="cta-block__text">
                  <h4><?php echo $cta['heading']; ?></h4>
                  <p><?php echo $cta['subheading']; ?></p>
                </div>
                <div class="cta-block__button">
                  <a href="<?php echo $cta['button_link']; ?>" class="btn">Contact Us</a>
                </div>
              </div>
            </section>

        <?php endif; ?>

      </main><!-- #main -->
    </div><!-- #primary -->    

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
