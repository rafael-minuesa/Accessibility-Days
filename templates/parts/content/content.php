<?php
/**
 * Template part for displaying Lectures content
 *
 * @link  https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    Reykjavik
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.0.0
 */





// Helper variables

	$args = ( ! isset( $helper ) ) ? ( null ) : ( array( 'helper' => $helper ) );


do_action( 'tha_entry_before', $args );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php do_action( 'tha_entry_top', $args ); ?>

	<div class="entry-content"><?php

		do_action( 'tha_entry_content_before', $args );

		if ( is_single( get_the_ID() ) ) {
			the_content( apply_filters( 'wmhook_reykjavik_summary_continue_reading', '' ) );
		} else {
			the_excerpt();
		}

		do_action( 'tha_entry_content_after', $args );

	?></div>

	<?php do_action( 'tha_entry_bottom', $args ); ?>

</article>

<?php

do_action( 'tha_entry_after', $args );
