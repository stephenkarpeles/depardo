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

        <section>
          <div class="container container--narrow">

            <?php      
              $intro = get_field('intro_content'); 
              if( $intro ): ?>

                <h2 class="color--primary"><?php echo $intro['heading']; ?></h2>
                <div>
                  <?php echo $intro['intro_text']; ?>
                </div>

            <?php endif; ?>
              
            <div class="form-wrap">
              <?php echo do_shortcode('[contact-form-7 id="132" title="Main Contact Form"]'); ?>
            </div>


            <?php      
              $info = get_field('contact_info'); 
              if( $info ): ?>

                <div class="contact-info">
                  <ul>
                    <li><?php echo $info['phone']; ?></li>
                    <li><?php echo $info['address_line_1']; ?></li>
                    <li><?php echo $info['address_line_2']; ?></li>
                  </ul>
                </div>

            <?php endif; ?>

          </div>
        </section>

      </main><!-- #main -->
    </div><!-- #primary -->    

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
