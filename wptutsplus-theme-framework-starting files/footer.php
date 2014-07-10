<?php // the footer template file - contains the footer itself plus the closing body and html tags ?>

	</div><!-- .main -->

<footer>

	<!-- the .fatfooter aside - I use this to enable a screen-wide background on the footer while still keeping the footer contents in line with the layout -->
	<aside class="fatfooter" role="complementary">
		<div class="first quarter left widget-area">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
		</div><!-- .first .widget-area -->
	
		<div class="second quarter widget-area">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
		</div><!-- .second .widget-area -->
	
		<div class="third quarter widget-area">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
		</div><!-- .third .widget-area -->
	
		<div class="fourth quarter right widget-area">
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
		</div><!-- .fourth .widget-area -->
	</aside><!-- #fatfooter -->

	
</footer>

<section class="colophon" role="contentinfo">
	<small class="copyright half left">
		&copy; <a href="<?php echo home_url( '/' ) ?>"><?php bloginfo( 'name' ); ?></a> 2013
	</small><!-- #copyright -->

	<small class="credits half right">
			Proudly powered by <a href="http://wordpress.org/">WordPress</a>.
		</a>
	</small><!-- #credits -->
</section><!--#colophon-->

<?php wp_footer(); ?>
</body>
</html>