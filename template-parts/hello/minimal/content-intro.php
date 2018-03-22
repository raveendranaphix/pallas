<?php

	// Page data
	$section_page_1 = get_field( get_the_ID(), true );
	$text_1 = get_field( 'intro_text_1', get_the_ID(), true );
	$text_2 = get_field( 'intro_text_2', get_the_ID(), true );

	// Image
	$image = get_the_post_thumbnail_url( $section_page_1->ID, 'full' );
?>
<section class="cd-section">
	<div class="cd-block">
		<div class="contact-top">

			<div class="contact-top-background" style ="background-image: url(<?php echo $image; ?>)"></div>

			<?php if ( ! empty( $text_1 ) ) : ?>
				<div class="big-text-pages-top">
					<h1><?php echo $text_1; ?></h1>
				</div>
			<?php endif; ?>

			<?php if ( ! empty( $text_2 ) ) : ?>
				<div class="small-text"><?php echo $text_2; ?></div>
			<?php endif; ?>

			<a href="#scroll-link" class="scroll scroll-down"></a>
		</div>
	</div>
</section>
