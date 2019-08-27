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
            <h2 class="color--primary">Say Hello</h2>
            <p>We would love to hear from you, we’re happy to take your questions. Please fill out the form below to contact us and we will respond to your inquiry as soon as possible</p>
              
            <div class="form-wrap">
              <?php echo do_shortcode('[contact-form-7 id="132" title="Main Contact Form"]'); ?>
            </div>

            <div class="contact-info">
              <ul>
                <li>1234 567 890</li>
                <li>1234 Street Name</li>
                <li>Perth, WA 60000</li>
              </ul>
            </div>
          </div>
        </section>

      </main><!-- #main -->
    </div><!-- #primary -->    

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
