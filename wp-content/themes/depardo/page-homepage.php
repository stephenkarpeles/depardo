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
              <h1 class="hero__title">Fuel success</h1>
              <p class="hero__copy">Get data-driven strategies to fire up short-term wins and long-term performance</p>          
            </div>
          </div>        
        </section>

        <section>
          <div class="container">
            <div class="grid text-centered">
              <div class="col col--1-3">
                <div class="icon-block">
                  <img class="icon-block__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon.svg" alt="alt text">
                  <h3 class="icon-block__heading">Is your business performing the way you had imagined?</h3>
                </div>
              </div>
              <div class="col col--1-3">
                <div class="icon-block">
                  <img class="icon-block__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon.svg" alt="alt text">
                  <h3 class="icon-block__heading">Are you well-positioned for the future?</h3>
                </div>
              </div>
              <div class="col col--1-3">
                <div class="icon-block">
                  <img class="icon-block__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon.svg" alt="alt text">
                  <h3 class="icon-block__heading">Are your people reaching their maximum potential?</h3>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="featured-block" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/banners/banner-leaf.jpg');">
          <div class="container">
            <div class="featured-block__content">
              <div class="featured-block__image">
                <img src="" alt="">
              </div>
              <div class="featured-block__heading">
                <h4>Drive Positive Change</h4>
              </div>
              <div class="featured-block__text">
                <p>De Pardo Consulting understands your challenges. As specialists who assess performance industry-wide, we know how to drive positive change in your business.</p>
                <p>We work with financial advisory firms, both directly and in partnership with financial institutions. We bring a unique perspective, honed from years of expertise and research, that ignites growth and fuels long-term success.</p>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="grid">
              <div class="col col--1-2">
                <p>Test</p>
              </div>
              <div class="col col--1-2">
                <h4>Let's Get Started</h4>
                <p>We start by listening to you, talking with your team, and striving
to completely understand your unique set of circumstances.
This allows us to quickly pinpoint any deficiencies and
distinguish your strengths and opportunities. Our custom-built
advice provides a set of recommendations for your specific
needs and capabilities, coupled with implementation planning
that propels short-term wins and achieves your long-term
aspirations.
Whether you’re a financial advisory firm or a financial
institution, our work is only effective if it truly gives you the tools
to create value and long-term success.
It’s the old adage: We don’t look good unless you look good</p>
              </div>
            </div>
          </div>
        </section>

        <section class="cta-block">
          <div class="container">
            <div class="cta-block__text">
              <h4>Ignite Growth</h4>
              <p>Put your firm on a path to outperform expectations</p>
            </div>
            <div class="cta-block__button">
              <a href="#" class="btn">Contact Us</a>
            </div>
          </div>
        </section>

      </main><!-- #main -->
    </div><!-- #primary -->    

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
