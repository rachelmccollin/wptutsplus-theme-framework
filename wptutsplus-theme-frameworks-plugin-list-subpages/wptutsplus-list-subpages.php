<?php 
/*Plugin Name: Wptutsplus List Subpages
Plugin URI: http://rachelmccollin.co.uk
Description: This plugin checks if the current page has parent or child pages and if so, outputs a list of the highest ancestor page and its descendants. It creates a function called wptp_list_subpages() which you insert into your theme or activate via a hook to work.
Version: 1.0
Author: Rachel McCollin
Author URI: http://rachelmccollin.co.uk
License: GPLv2
*/

/*******************************************************************************
function wptp_check_for_page_tree() - checks of the current page is in a page tree.
*******************************************************************************/
function wptp_check_for_page_tree() {

	//start by checking if we're on a page
	if( is_page() ) {
	
		global $post;
	
		// next check if the page has parents
		if ( $post->post_parent ){
		
			// fetch the list of ancestors
			$parents = array_reverse( get_post_ancestors( $post->ID ) );
			
			// get the top level ancestor
			return $parents[0];
			
		}
		
		// return the id  - this will be the topmost ancestor if there is one, or the current page if not
		return $post->ID;
		
	}

}

/*******************************************************************************
function wptp_list_subpages() - lists the $ancestor page and its supbages
insert into your theme or activate via a hook.
*******************************************************************************/
function wptp_list_subpages() {

	// don't run on the main blog page
	if ( is_page() && ! is_home() ) {

		// run the wptp_check_for_page_tree function to fetch top level page
		$ancestor = wptp_check_for_page_tree();

		// set the arguments for children of the ancestor page
		$args = array(
			'child_of' => $ancestor,
			'depth' => '-1',
			'title_li' => '',
		);
		
		// set a value for get_pages to check if it's empty
		$list_pages = get_pages( $args );
		
		// check if $list_pages has values
		if( $list_pages ) {

			// open a list with the ancestor page at the top
			?>
			<ul class="page-tree">
				<?php // list ancestor page ?>
				<li class="ancestor">
					<a href="<?php echo get_permalink( $ancestor ); ?>"><?php echo get_the_title( $ancestor ); ?></a>
				</li>
				
				<?php
				// use wp_list_pages to list subpages of ancestor or current page
				wp_list_pages( $args );;
			
	
			// close the page-tree list
			?>
			</ul>
	
		<?php
		}
	}

}
?>