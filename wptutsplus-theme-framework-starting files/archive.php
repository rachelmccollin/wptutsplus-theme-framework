<?php 
/* the archive file - for displaying archives
*/
 get_header(); ?>
	
			<?php
			/* Queue the first post, that way we know if this is a date archive so we can display the correct title.
			 * We reset this later so we can run the loop properly with a call to rewind_posts().
			 */
			if ( have_posts() )
				the_post();
			?>

					<h2 class="page-title">
						<?php if ( is_day() ) { ?>
							Archive for <?php echo get_the_date();
						}
						elseif ( is_month() ) { ?>
							Archive for <?php echo get_the_date('F Y');
						}
						elseif ( is_year() ) { ?>
							Archive for <?php echo get_the_date('Y');
						}
						else {
							echo get_queried_object()->name; 
						} ?>
					</h2>

			<?php rewind_posts(); ?>	
			
				
			<?php // start the loop proper ?> 
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear' ); ?>>
			
				<section class="left image quarter">
					
					<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'medium', array(
								'class' => 'left',
								'alt'	=> trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt ))
							) ); ?>
						</a>
					<?php } ?>

				</section><!-- .image -->
			
				<section class="left archive-content three-quarters">
			
					<h3 class="entry-title">
						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
							<?php the_title(); ?>
						</a>
					</h3>

					<section class="entry-content">
						<?php the_excerpt(); ?>
					</section><!-- .entry-content -->
				
				</section><!-- .archive-content -->
		
				
			</article><!-- #post-theID-->
			
			<?php endwhile; ?>
			<?php // ends the loop ?> 

			
<?php get_sidebar(); ?>
<?php get_footer(); ?>