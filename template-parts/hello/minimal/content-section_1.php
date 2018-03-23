<?php

	$section_1 = get_field( 'minimal section_1', get_the_ID(), true);
	$image = get_the_post_thumbnail_url( $section_1->ID, 'full' );
?>

<section class="cd-section" id="scroll-link">
	<div class="cd-block">
		<div class="cd-half-block" style="background-image: url(<?php echo $image; ?>);">></div>
		<div class="cd-half-block">
			<div class="block-text">
				 <?php foreach ( pallas_contact_info() as $ci ) :

                    // Contact info
                    $contact = get_theme_mod( 'pallas_contact_info_setting_' . $ci['name'] );

                    if ( ! empty( $contact ) ) :
                   ?>
				<div class="contact-details padding-contact">
					<p><span><?php echo esc_attr( $ci['icon_hex'] ); ?></span><?php echo esc_attr( $ci['title'] ); ?></p>
					<h6><?php echo esc_attr( $contact ); ?></h6>
				</div>
				<?php endif; endforeach; ?>
			</div>
		</div>
	</div>
</section>
