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

        <section class="hero" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/banners/banner-leaf.jpg');">
          <div class="container">
            <div class="hero__text">
              <h1 class="hero__title">Title</h1>
              <p class="hero__copy">This is the copy description that sits inside the hero block. It can be short or long.</p>          
            </div>
          </div>        
        </section>

        <section>
          <div class="container">
            <div class="grid text-centered">
              <div class="col col--1-3">
                <h3>Is your business performing the way you had imagined?</h3>
              </div>
              <div class="col col--1-3">
                <h3>Are you well-positioned for the future?</h3>
              </div>
              <div class="col col--1-3">
                <h3>Are your people reaching their maximum potential?</h3>
              </div>
            </div>
          </div>
        </section>

      </main><!-- #main -->
    </div><!-- #primary -->    

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
