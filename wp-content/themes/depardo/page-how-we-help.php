<?php
/**
 * Template Name: How We Help
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
          <div class="container">
            <div class="grid">
              <div class="col col--2-5">
                <h2 class="color--primary">Financial Advisory Firms</h2>
                <p>We like to jump right in and get moving. It all starts by listening to you — your concerns, your challenges, and business needs. We talk with the relevant people on your team and gather all the facts. Then, we put it all together, combining what we learn from you with our deep industry knowledge and relevant data. Ultimately, we deliver detailed, customized, and implementable recommendations on how your firm can address short term challenges and achieve long-term goals.</p>
                <p><strong>Common issues our financial advisory clients face include:</strong></p>
                <ul class="no-top-margin">
                  <li>Stalled growth</li>
                  <li>Lack of a clear business strategy</li>
                  <li>Confusion around how to structure roles within your firm to optimize efficiency and your client experience</li>
                  <li>Uncertainty regarding how to structure remuneration for different role types</li>
                  <li>High level of dependency on firm principals</li>
                  <li>Uncertainty about how to price services </li>
                  <li>Lack of strategy for pursuing new markets</li>
                  <li>Need to assess the benefits of a merger or acquisition </li>
                </ul>
              </div>
              <div class="col col--2-5">
                <h2 class="color--primary">Financial Institutions</h2>
                <p>If you're with a financial institution, you can think of De Pardo Consulting as a partner that helps fuel the growth of the advisory firms you work with. Simply put, we have the ability to provide a wide range of services and programs to help support you in engaging and advancing advisory firm practices. This support enhances your brand while giving financial advisory firms the business management guidance they need.</p>
                <p><strong>Common issues our financial institution clients face include:</strong></p>
                <ul class="no-top-margin">
                  <li>Continuous need for outreach to advisory firms</li>
                  <li>Desire for engaging content and presentations designed specifically to support advisory firm success</li>
                  <li>Uncertainty regarding how to develop a program and prioritize advisor support resources</li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="interstitial-split" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/stock/istockphoto-528053512-2048x2048.jpg');">
          <div class="container">
            <div class="grid">
              <div class="col col--2-5 col--left">
                <h4>Financial advisory firms</h4>
                <p>look to De Pardo Consulting for an impartial perspective on their business coupled with a broad knowledge of industry best practices.</p>
              </div>
              <div class="col col--2-5 col--right">
                <h4>Financial institutions</h4>
                <p>work with De Pardo Consulting to facilitate advisor growth, provide customized research and consulting support, and enhance relationships with the advisory firms they partner with.</p>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="grid">
              <div class="col col--2-5"> 

                <h2 class="color--primary">We can help</h2>         
                <div class="accordion-container">
                  <h3>Ignite Growth and Propel Profit</h3>
                  <div class="accordion-text">
                    <p><strong>Strategic Growth Planning</strong><br>
                      We create effective, data-driven strategic plans that determine how firms can optimize their time, money and energy to achieve their goals. Working directly with firm shareholders, we create a three-year strategic plan with twelve-month priorities. This combines with an implementation schedule that ensures your plan will be brought to life to deliver  long-term growth and success.
                    </p>
                    <p><strong>Merger/Acquisition Assessments</strong><br>
                      We provide a deep analysis of whether a merger or acquisition makes sense to fulfil your growth plans. Whether you’re actively engaged in discussions with other entities or just considering M&A as a path to growth, we will assess how a transaction would support your growth aspirations.
                    </p>
                    <p><strong>Organizational Design</strong><br>
                      We help firms organize talent to serve their clients in the most efficient manner. This includes defining an ideal firm organizational structure and how to create a more productive and profitable advice team.
                    </p>
                  </div>
                </div>
                <div class="accordion-container">
                  <h3>Power New Markets </h3>
                  <div class="accordion-text">
                    <p><strong>Organizational Design</strong><br>
                      We help firms organize talent to serve their clients in the most efficient manner. This includes defining an ideal firm organizational structure and how to create a more productive and profitable advice team.
                    </p>
                  </div>
                </div>
                <div class="accordion-container">
                  <h3>Spark Loyalty</h3>
                  <div class="accordion-text">
                    <p><strong>Organizational Design</strong><br>
                      We help firms organize talent to serve their clients in the most efficient manner. This includes defining an ideal firm organizational structure and how to create a more productive and profitable advice team.
                    </p>
                  </div>
                </div>

              </div>
              
              <div class="col col--2-5"> 

                <h2 class="color--primary">We can help</h2>         
                <div class="accordion-container">
                  <h3>Market Research</h3>
                  <div class="accordion-text">
                    <p><strong>Organizational Design</strong><br>
                      We help firms organize talent to serve their clients in the most efficient manner. This includes defining an ideal firm organizational structure and how to create a more productive and profitable advice team.
                    </p> 
                  </div>
                </div>
                <div class="accordion-container">
                  <h3>Practice Management Program Assessment</h3>
                  <div class="accordion-text">
                    <p><strong>Organizational Design</strong><br>
                      We help firms organize talent to serve their clients in the most efficient manner. This includes defining an ideal firm organizational structure and how to create a more productive and profitable advice team.
                    </p> 
                  </div>
                </div>
                <div class="accordion-container">
                  <h3>Workshops, Webcasts, and Presentations for Advisors</h3>
                  <div class="accordion-text">
                    <p><strong>Organizational Design</strong><br>
                      We help firms organize talent to serve their clients in the most efficient manner. This includes defining an ideal firm organizational structure and how to create a more productive and profitable advice team.
                    </p> 
                  </div>
                </div>
                <div class="accordion-container">
                  <h3>Speaking Engagements</h3>
                  <div class="accordion-text">
                    <p><strong>Organizational Design</strong><br>
                      We help firms organize talent to serve their clients in the most efficient manner. This includes defining an ideal firm organizational structure and how to create a more productive and profitable advice team.
                    </p> 
                  </div>
                </div>

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
