<?php

    // Get the page
    $section_2_page = get_field( 'homepage_section_2', get_the_ID(), true );

    if ( ! empty( $section_2_page ) ) :

        // Image
        $image_url = get_the_post_thumbnail_url( $section_2_page->ID, 'full'  );
?>
<section class="cd-section">
    <div class="cd-block">
        <div class="cd-half-block"></div>
        <div class="cd-half-block">
            <div class="block-text">
                <h2>Portfolio<span>.</span></h2>
                <p>We are relentless in moving boundaries and carry out this spirited attitude into digital solutions. Digital solutions that engage, inspire and make you think. Make you curious.</p>
                <a href="work.html" class="btn animsition-link">discover</a>
            </div>
        </div>
    </div>
</section>
<!-- .cd-section -->
