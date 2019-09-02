<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package depardo
 */

?>

	</div><!-- #content -->
</div><!-- #page -->

<footer class="footer">
	<div class="container">
		<div class="grid">
			<div class="col col--1-3">
				<?php
					$leftCol = get_field('left_column', 'option');	
					if( $leftCol ): ?>

					<img class="footer__logo" src="<?php echo $leftCol['logo']['url']; ?>" alt="De Pardo Consulting Logo">
					<div class="footer__text"><?php echo $leftCol['blurb']; ?></div>
					<p><a class="footer__link" href="<?php echo $leftCol['link']; ?>"><?php echo $leftCol['link_text']; ?> ></a></p>

				<?php endif; ?>
			</div>

			<div class="col col--1-3">
				<h3 class="footer__subhead">/ Recent Posts</h3>

				<?php
          // The Query
          $query = new WP_Query( array( 'posts_per_page' => 2 ) );
          // The Loop
          while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part( 'template-parts/content-footer', get_post_type() );
          }
          wp_reset_postdata();
        ?>

			</div>

			<div class="col col--1-3">
				<?php
					$rightCol = get_field('right_column', 'option');	
					if( $rightCol ): ?>
						<h3 class="footer__subhead">/ <?php echo $rightCol['heading']; ?></h3>
						<div class="footer__text"><?php echo $rightCol['blurb']; ?></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
