<?php // the sidebar template file - contains the sidebar widgets ?>

</div><!-- #content-->

		<!-- the sidebar - in WordPress this will be populated with widgets -->
		<?php if ( is_active_sidebar( 'sidebar-widget-area' ) ) { ?>
			<aside class="sidebar widget-area one-third right" role="complementary">
				<?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
			</aside>
		<?php } ?>