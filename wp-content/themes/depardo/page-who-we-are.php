<?php
/**
 * Template Name: Who We Are
 * @package depardo
 */

get_header();
?>

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
        $bio = get_field('about_bio'); 
        if( $bio ): ?>

          <section>
            <div class="container container--narrow">
              <div class="bio">
                <div class="bio__image">
                  <img src="<?php echo $bio['bio_image']['url']; ?>" alt="<?php echo $bio['bio_image']['alt']; ?>">
                </div>
                <div class="bio__text-container">
                  <h2 class="color--primary"><?php echo $bio['bio_name']; ?></h2>
                  <p><strong><?php echo $bio['bio_title']; ?></strong></p>
                  <div class="bio__text-content">
                    <?php echo $bio['bio_content']; ?>
                  </div>
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
                <a href="<?php echo $cta['button_link']; ?>" class="btn"><?php echo $cta['button_text']; ?></a>
              </div>
            </div>
          </section>

      <?php endif; ?>   

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
