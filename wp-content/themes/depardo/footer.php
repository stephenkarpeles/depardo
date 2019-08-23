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
				<img class="footer__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-red.svg" alt="">
				<p class="footer__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.</p>
				<p><a class="footer__link" href="#">Read More ></a></p>
			</div>
			<div class="col col--1-3">
				<h3 class="footer__subhead">/ Recent Posts</h3>
				<p class="footer__text">
				  Month 01, 2019<br>
				  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.
			  </p>
			  <p class="footer__text">
				  Month 01, 2019<br>
				  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.
			  </p>
			</div>
			<div class="col col--1-3">
				<h3 class="footer__subhead">/ Subhead</h3>
				<p class="footer__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
