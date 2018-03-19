<?php
    // Get the page
    $section_4_page = get_field( 'homepage_section_4', get_the_ID(), true);

    if( !  empty( $section_4_page ) ):

        $image_url = get_the_post_thumbnail_url( $section_4_page->ID, 'full');

?>

<section class="cd-section">
    <div class="cd-block">
        <div class="cd-half-block" style ="background-image: url( <?php echo $image_url; ?> )"></div>
        <div class="cd-half-block">
            <div class="block-text">
                <h2><?php echo get_the_title( $section_4_page->ID ); ?><span>.</span></h2>
                <p><?php echo get_the_excerpt( $section_4_page->ID ); ?></p>
                <a href="<?php echo get_the_permalink( '$section_4_page->ID'); ?>" class="btn animsition-link">
                    <?php _e( 'get in touch', 'pallas' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- .cd-section -->
<?php endif; ?>
<nav>
    <ul class="cd-vertical-nav">
        <li><a href="#0" class="cd-prev inactive"></a></li>
        <li><a href="#0" class="cd-next inactive1"></a></li>
    </ul>
</nav>
<!-- .cd-vertical-nav -->

