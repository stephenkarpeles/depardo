<?php
/**
 * Template Name: Who We Help
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
        $imagetext = get_field('image_text_panel'); 
        if( $imagetext ): ?>

          <section class="double-vert-padding">
            <div class="container">
              <div class="grid">
                <div class="col col--1-2">
                  <img src="<?php echo $imagetext['image']['url']; ?>" alt="<?php echo $imagetext['image']['alt']; ?>">
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
        $testimonials = get_field('testimonial_section');  
        if( $testimonials ): ?>

          <section class="testimonial has-overlay-dark" style="background-image: url('<?php echo $testimonials['background_image']['url']; ?>');">
            <div class="container">
              <div class="testimonial__quote-mark">
                <img src="<?php echo $testimonials['testimonial_quote_mark_icon']['url']; ?>" alt="Testimonial Icon">
              </div>

              <div class="slideshow-container">
                <div class="rotating-slide fade active-slide" data-variant-content="1">
                  <p class="testimonial__text"><?php echo $testimonial['testimonial_text']; ?></p>
                  <p class="testimonial__author-info"><strong><?php echo $testimonial['testimonial_author_info']; ?></strong></p>          
                </div>
                <div class="rotating-slide fade" data-variant-content="2">
                  <p class="testimonial__text">Etiam suscipit sodales ligula ut egestas. Aliquam libero tortor, ornare at purus vel, ornare aliquam ipsum. Cras ornare ligula neque, id suscipit magna sodales nec. Etiam suscipit sodales ligula ut egestas. Aliquam libero tortor, ornare at purus vel, ornare aliquam ipsum. Cras ornare ligula neque, id suscipit magna sodales nec.</p>
                  <p class="testimonial__author-info"><strong><?php echo $testimonial['testimonial_author_info']; ?></strong></p>          
                </div>
                <div class="rotating-slide fade" data-variant-content="3">
                  <p class="testimonial__text"><?php echo $testimonial['testimonial_text']; ?></p>
                  <p class="testimonial__author-info"><strong><?php echo $testimonial['testimonial_author_info']; ?></strong></p>          
                </div>
                <div class="rotating-slide fade" data-variant-content="4">
                  <p class="testimonial__text">Etiam suscipit sodales ligula ut egestas. Aliquam libero tortor, ornare at purus vel, ornare aliquam ipsum. Cras ornare ligula neque, id suscipit magna sodales nec. Etiam suscipit sodales ligula ut egestas. Aliquam libero tortor, ornare at purus vel, ornare aliquam ipsum. Cras ornare ligula neque, id suscipit magna sodales nec.</p>
                  <p class="testimonial__author-info"><strong><?php echo $testimonial['testimonial_author_info']; ?></strong></p>          
                </div>
              </div>

              <div class="dot-wrapper dot-wrapper--hidden">
                <span class="slide-dot active-dot" data-variant-index="1"></span> 
                <span class="slide-dot" data-variant-index="2"></span> 
                <span class="slide-dot" data-variant-index="3"></span> 
                <span class="slide-dot" data-variant-index="4"></span> 
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
                  <img class="icon-block__image icon-block__image--left-aligned" src="<?php echo $columns['column_1_icon']['url']; ?>" alt="<?php echo $columns['column_1_icon']['alt']; ?>">
                  <h2 class="color--primary"><?php echo $columns['column_1_heading']; ?></h2>
                  <div>
                    <?php echo $columns['column_1_text']; ?>
                  </div>
                </div>
                <div class="col col--2-5">
                  <img class="icon-block__image icon-block__image--left-aligned" src="<?php echo $columns['column_2_icon']['url']; ?>" alt="<?php echo $columns['column_2_icon']['alt']; ?>">
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
