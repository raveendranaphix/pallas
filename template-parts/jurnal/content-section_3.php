<?php

	// Page data
	$section_3_post = get_field( 'jurnal_section_3', get_the_ID(), true );

	if ( ! empty( $section_3_post ) ) :

		setup_postdata( $GLOBALS['post'] =& $section_3_post );
		global $post;

	    	// Image
		$image_url = get_the_post_thumbnail_url( $post->ID, 'full'  );
?>
<section class="cd-section-blog" id="scroll-link">
	<div class="cd-block-blog">
		<div class="cd-half-block-blog" style="background-image: url(<?php echo $image_url; ?>);"></div>
		<div class="cd-half-block-blog">
			<div class="block-text-blog">
				<div class="blog-date">
					<?php echo get_the_date( 'F j, Y', $post->ID ); ?>
					<span>Author: <?php echo get_the_author(); ?></span>
				</div>
				<h3><?php the_title(); ?><span>.</span></h3>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php echo the_permalink(); ?>" class="btn animsition-link">
					<?php _e( 'Read more', 'pallas' ); ?>
				</a>
			</div>
		</div>
	</div>
</section> <!-- .cd-section -->
<?php wp_reset_postdata(); endif;
