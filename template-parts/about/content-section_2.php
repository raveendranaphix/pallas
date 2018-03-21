<?php

//
$member_query = pallas_get_members();

if ( $member_query->have_posts() ) :
?>
<section class="section white-background padding-bottom hidden-sec">
    <div class="container">
        <?php while ( $member_query->have_posts() ) : $member_query->the_post();

            // Image
            $image_url   = get_the_post_thumbnail_url( get_the_ID(), 'large'  );
            $position    = get_field( 'position', get_the_ID(), true );
            $twitter_url = get_field( 'twitter_url', get_the_ID(), true );
            $github_url  = get_field( 'github_url', get_the_ID(), true );
            $google_url  = get_field( 'google_url', get_the_ID(), true );

            // Skills
            $skill_terms = wp_get_post_terms( get_the_ID(), 'pl_member_skill', array( 'number' => 4 ) );
        ?>
            <div class="four columns">
                <div class="team-wrap">
                    <img src="<?php echo esc_url( aq_resize( $image_url, 500, 500, true, true, true ) ); ?>" alt="<?php the_title(); ?>">
                    <div class="mask-team">
                        <h6><?php the_title(); ?></h6>
                        <?php
                            if ( ! empty( $position ) ) {
                                echo sprintf( '<p><span>%s</span></p>', $position );
                            }
                        ?>

                        <?php if ( ! empty( $skill_terms ) && is_array( $skill_terms ) ) : ?>
                            <ul class="skills-list">
                                <?php
                                    foreach ( $skill_terms as $skill ) {
                                        echo sprintf( '<li><p><span>&#xf1db;</span>%s</p></li>', $skill->name );
                                    }
                                ?>
                            </ul>
                        <?php endif; ?>

                        <div class="social-team">
                            <ul class="list-social-team">

                                <?php if ( ! empty( $twitter_url ) ) : ?>
                                <li class="icon-soc-team">
                                    <a target="_blank" href="<?php echo esc_url( $twitter_url ); ?>">&#xf099;</a>
                                </li>
                                <?php endif; ?>

                                <?php if ( ! empty( $github_url ) ) : ?>
                                <li class="icon-soc-team">
                                    <a target="_blank" href="<?php esc_url( $github_url ); ?>">&#xf09b;</a>
                                </li>
                                <?php endif; ?>

                                <?php if ( ! empty( $google_url ) ) : ?>
                                <li class="icon-soc-team">
                                    <a  target="_blank" href="<?php echo esc_url( $google_url ); ?>">&#xf0d5;</a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>
<?php endif;
