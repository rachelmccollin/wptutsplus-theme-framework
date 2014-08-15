<?php
/***********************************************************
Create your own theme framework
Child theme - functions file
***********************************************************/

/***********************************************************
Add a call to action in the sidebar
***********************************************************/
function wptp_cta() {

	if( is_singular() ) {?>
		
		<div class="cta">
	
			<p>Email us on <a href="mailto:mail@example.com">mail@example.com</a></p>
	
		</div>
			
	<?php
	}
	
}
add_action( 'wptp_sidebar', 'wptp_cta', 1 )

/***********************************************************
Add text after single posts
***********************************************************/
function wptp_after_single_posts() {
	
		if( is_singular( 'post' ) ) { ?>
		
			<h3>Enjoyed this? Now try reading more!</h3>
			
			<?php
			// query to list latest blog posts here
			
		}
	
}
add_action( 'wptp_after_content', 'wptp_after_single_posts' );
?>