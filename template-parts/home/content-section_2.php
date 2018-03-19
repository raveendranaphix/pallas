<?php

    // Get the page
    $section_2_page = get_field( 'homepage_section_2', get_the_ID(), true );

    if ( ! empty( $section_2_page ) ) :

        // Image
        $image_url = get_the_post_thumbnail_url( $section_2_page->ID, 'full'  );
?>
<section class="cd-section">
    <div class="cd-block">
        <div class="cd-half-block" style ="background-image: url( <?php echo $image_url ?>);"></div>
        <div class="cd-half-block">
            <div class="block-text">
                <h2><?php echo get_the_title( $section_2_page->ID ); ?><span>.</span></h2>
                <p><?php echo get_the_excerpt( $section_2_page->ID ); ?></p>
                <a href="<?php echo get_the_permalink( $section_2_page->ID ); ?>" class="btn animsition-link">
                    <?php _e( 'discover', 'pallas'); ?>
                </a>
            </div>
        </div>
    </div>
</section>
<?php endif;
