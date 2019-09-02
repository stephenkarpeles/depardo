<?php
/**
 * Template part for displaying posts in footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package depardo
 */

?>

<article class="footer-post footer__text">
  <div class="footer-post__title">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>      
    </a>
  </div>
  <div class="footer-post__date">
    <?php echo get_the_date( 'F j, Y' ); ?>
  </div>
  <div class="footer-post__excerpt">
    <?php echo wp_trim_words( get_the_content(), 20, '&nbsp;|&nbsp;<a href="' . get_the_permalink() . '">Read More ></a>' ); ?>
  </div>
</article>
