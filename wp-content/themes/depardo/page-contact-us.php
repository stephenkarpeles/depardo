<?php
/**
 * Template Name: Contact Us
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
