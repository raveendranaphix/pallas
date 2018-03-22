<?php

	$section_page = get_field( 'homepage_section_3', get_the_ID(), true );
	$image  = get_the_post_thumbnail_url( $section_page->ID, 'full' );
	$text_1 = get_field( 'intro_text_1', get_the_ID(), true );
	$text_2 = get_field( 'intro_text_2', get_the_ID(), true );
?>
<section class="cd-section-blog");>
	<div class="cd-block-blog">
		<div class="blog-top" style ="background-image: url( <?php echo $image; ?> )">

			<?php if( ! empty( $text_1 ) ) : ?>
				<div class="big-text-pages-top">
					<?php echo sprintf( '<h1>%s<span>.</span></h1>', $text_1 ); ?>
				</div>
			<?php endif; ?>

			<?php if ( ! empty( $text_2 ) ): ?>
				<div class="small-text"><?php echo $text_2; ?></div>
			<?php endif; ?>

			<a href="#scroll-link" class="scroll scroll-down"></a>

		</div>
	</div>
</section> <!-- .cd-section -->
