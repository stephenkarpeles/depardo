<?php
/**
 * Template Name: How We Help
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
        $columns = get_field('columns');  
        if( $columns ): ?>

          <section>
            <div class="container">
              <div class="grid">
                <div class="col col--2-5">
                  <h2 class="color--primary"><?php echo $columns['column_1_heading']; ?></h2>
                  <div>
                    <?php echo $columns['column_1_text']; ?>
                  </div>
                </div>
                <div class="col col--2-5">
                  <h2 class="color--primary"><?php echo $columns['column_2_heading']; ?></h2>
                  <div>
                    <?php echo $columns['column_2_text']; ?>
                  </div>
                </div>
              </div>
            </div>
          </section>

      <?php endif; ?> 

      <?php      
        $interstitial = get_field('interstitial_split');  
        if( $interstitial ): ?>

          <section class="interstitial-split" style="background-image: url('<?php echo $interstitial['background_image']['url']; ?>');">
            <div class="container">
              <div class="grid">
                <div class="col col--2-5 col--left">
                  <h4><?php echo $interstitial['column_1_heading']; ?></h4>
                  <p><?php echo $interstitial['column_1_text']; ?></p>
                </div>
                <div class="col col--2-5 col--right">
                  <h4><?php echo $interstitial['column_2_heading']; ?></h4>
                  <p><?php echo $interstitial['column_2_text']; ?></p>
                </div>
              </div>
            </div>
          </section>

      <?php endif; ?> 

      <?php      
        $accordion = get_field('accordion');  
        if( $accordion ): ?>

          <section>
            <div class="container">
              <div class="grid">
                <div class="col col--2-5"> 

                  <h2 class="color--primary"><?php echo $accordion['accordion_left_heading']; ?></h2> 

                  <?php if( have_rows('accordion') ): ?>
                    <?php while( have_rows('accordion') ): the_row(); 
                      if( have_rows('accordion_left') ): ?>
                        <?php while( have_rows('accordion_left') ): the_row();

                          // vars
                          $title = get_sub_field('title');
                          $text = get_sub_field('text');

                          ?>

                          <div class="accordion-container">
                            <h3><?php echo $title; ?></h3>
                            <div class="accordion-text">
                              <?php echo $text; ?>
                            </div>
                          </div>

                        <?php endwhile; ?>
                      <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>

                </div>
                
                <div class="col col--2-5"> 

                  <h2 class="color--primary"><?php echo $accordion['accordion_right_heading']; ?></h2>   

                  <?php if( have_rows('accordion') ): ?>
                    <?php while( have_rows('accordion') ): the_row(); 
                      if( have_rows('accordion_right') ): ?>
                        <?php while( have_rows('accordion_right') ): the_row();
                          // vars
                          $title = get_sub_field('title');
                          $text = get_sub_field('text');

                          ?>

                          <div class="accordion-container">
                            <h3><?php echo $title; ?></h3>
                            <div class="accordion-text">
                              <?php echo $text; ?>
                            </div>
                          </div>

                        <?php endwhile; ?>
                      <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>

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
