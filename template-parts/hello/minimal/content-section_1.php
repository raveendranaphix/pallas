<?php

	// Get data
	$section_1 = get_field( 'minimal_section_1', get_the_ID(), true);
	$image_url = get_the_post_thumbnail_url( $section_1->ID, 'full' );
?>

<section class="cd-section" id="scroll-link">
	<div class="cd-block">
		<div class="cd-half-block" style="background-image: url(<?php echo $image_url; ?>);">></div>
		<div class="cd-half-block">
			<div class="block-text">
				<?php foreach ( pallas_contact_info() as $ci ) :

					// Contact info
					$contact = get_theme_mod( 'pallas_contact_info_setting_' . $ci['name'] );

					if ( ! empty( $contact ) ) : ?>
					<div class="contact-details padding-contact">
						<p><span><?php echo esc_html( $ci['icon_hex'] ); ?></span><?php echo esc_html( $ci['title'] ); ?></p>
						<h6><?php echo esc_html( $contact ); ?></h6>
					</div>
				<?php endif; endforeach; ?>
			</div>
		</div>
	</div>
</section>
