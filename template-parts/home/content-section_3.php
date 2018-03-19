<?php

    $section_3_page = get_field( 'homepage_section_3', get_the_ID(), true);

    if( ! empty( $section_3_page ) ) :

        $image_url = get_the_post_thumbnail_url( $section_3_page->ID, 'full');

?>
<section class="cd-section">
    <div class="cd-block">
        <div class="cd-half-block" style ="background-image: url( <?php echo $image_url; ?> )"></div>
        <div class="cd-half-block">
            <div class="block-text">
                <h2><?php echo get_the_title( $section_3_page->ID ); ?><span>.</span></h2>
                <p><?php echo get_the_excerpt( $section_3_page->ID); ?></p>
                <a href="<?php echo get_the_permalink( $section_3_page->ID ); ?>" class="btn animsition-link">
                    <?php _e( 'read articles', 'pallas' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- .cd-section -->
<?php endif;
