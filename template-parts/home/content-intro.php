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
                   <?php echo $text_2; ?>
                </div>
            <?php endif; ?>

            <div class="social-top">
                <ul class="list-social">
                    <?php foreach ( pallas_social_links() as $sl ) :

                        // URL
                        $link = get_theme_mod( 'pallas_social_link_setting_' . $sl['name'] );

                        if ( ! empty( $link ) ) :
                    ?>
                        <li class="icon-soc tipped" data-title="<?php echo esc_attr( $sl['title'] ); ?>" data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a target="_blank" href="<?php echo esc_url( $link ); ?>"><?php echo esc_attr( $sl['icon_hex'] ); ?></a>
                        </li>
                    <?php endif; endforeach; ?>
                </ul>
            </div>
            <a href="#scroll-link" class="scroll scroll-down"></a>
        </div>
    </div>
</section>
<!-- .cd-section -->
