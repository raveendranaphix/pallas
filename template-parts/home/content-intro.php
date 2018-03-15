<?php

// 
$image = get_field( 'intro_image', get_the_ID(), true );
$text_1 = get_field( 'intro_text_1', get_the_ID(), true );
$text_2 = get_field( 'intro_text_2', get_the_ID(), true );
?>
<section class="cd-section">
    <div class="cd-block">
        <div class="home-top" style="<?php echo isset( $image['url'] ) ? 'background-image: url(' . esc_url( $image['url'] ) . ');' : ''; ?>">

            <?php if ( ! empty( $text_1 ) ) : ?>
                <div class="cd-intro">
                    <?php echo sprintf( '<h1>%s</h1>', $text_1 ); ?>
                </div>
            <?php endif; ?>

            <?php if ( ! empty( $text_2 ) ) : ?>
                <div class="small-text">
                   <?php echo sprintf( '<h3>%s</h3>', $text_2 ); ?>
                </div>
            <?php endif; ?>
            <div class="social-top">
                <ul class="list-social">
                    <li class="icon-soc tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'>
                        <a href="#">&#xf099;</a>
                    </li>
                    <li class="icon-soc tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
                        <a href="#">&#xf09a;</a>
                    </li>
                    <li class="icon-soc tipped" data-title="github"  data-tipper-options='{"direction":"top","follow":"true"}'>
                        <a href="#">&#xf09b;</a>
                    </li>
                    <li class="icon-soc tipped" data-title="google +"  data-tipper-options='{"direction":"top","follow":"true"}'>
                        <a href="#">&#xf0d5;</a>
                    </li>
                </ul>
            </div>
            <a href="#scroll-link" class="scroll scroll-down"></a>
        </div>
    </div>
</section>
<!-- .cd-section -->