<?php
/**
 * Template Name: Who We Help
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

            <section class="hero" style="background-image: url('<?php echo $hero['background_image']['url']; ?>');">              
              <div class="container">
                <div class="hero__text">
                  <h1 class="hero__title"><?php echo $hero['heading']; ?></h1>
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stock/bird-right-light.jpg" alt="alt text">
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
          $testimonial = get_field('testimonial');  
          if( $testimonial ): ?>

            <section class="testimonial has-overlay-dark" style="background-image: url('<?php echo $testimonial['background_image']['url']; ?>');">
              <div class="container">
                <div class="testimonial__quote-mark">"</div>
                <p><?php echo $testimonial['testimonial_text']; ?></p>
                <p><strong><?php echo $testimonial['testimonial_author_info']; ?></strong></p>              
              </div>
            </section>

        <?php endif; ?>

        <section>
          <div class="container">
            <div class="grid">
              <div class="col col--2-5">
                <img class="icon-block__image icon-block__image--left-aligned" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-man-piechart.svg" alt="alt text">
                <h2 class="color--primary">Financial Advisory Firms</h2>
                <p>Individual advisory firms that we work with tend to be mid-sized or larger, with annual revenue over $2.5 million. At this level, more complicated business issues begin to arise, requiring firms to operate differently than they had in the past.</p>
              </div>
              <div class="col col--2-5">
                <img class="icon-block__image icon-block__image--left-aligned" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-man-globe.svg" alt="alt text">
                <h2 class="color--primary">Financial Institutions</h2>
                <p>For financial institutions, and other industry organizations whose affiliates include financial advisory firms, we help support these affiliates and build loyalty. Our presentations and tools are valuable assets that provide insight and clarity when a broad industry-wide perspective is needed.</p>
              </div>
            </div>
          </div>
        </section>


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
                  <a href="#" class="btn">Contact Us</a>
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
