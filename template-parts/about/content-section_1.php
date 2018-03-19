<?php

    $section_1_post = get_field( 'about_section_1', get_the_ID(), true );

    if ( ! empty( $section_1_post ) ) :
?>

<section class="section white-background padding-top-bottom shadow-sec" id="scroll-link">
    <div class="container">
        <div class="eight columns">
            <div class="section-big-header-text">
                <h2><?php echo get_the_title( $section_1_post->ID ); ?><span>.</span></h2>
                <div class="line-big-header"></div>
                <p><?php echo $section_1_post->post_excerpt; ?></p>
            </div>
        </div>
        <div class="eight columns">
            <?php echo wpautop( $section_1_post->post_content ); ?>
        </div>
    </div>
</section>
<?php endif;
