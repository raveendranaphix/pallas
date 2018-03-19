<?php

    $section_1_page = get_field( 'about_section_1', get_the_ID(), true );

    if( ! empty( $section_1_page ) ) :
?>

<section class="section white-background padding-top-bottom shadow-sec" id="scroll-link">
    <div class="container">
        <div class="eight columns">
            <div class="section-big-header-text">
                <h2><?php echo get_the_title( $section_1_page->ID ); ?><span>.</span></h2>
                <div class="line-big-header"></div>
                <p><?php echo get_the_content( $section_1_page->ID ); ?></p>
            </div>
        </div>
        <div class="eight columns">
            <p class="text-bottom-margin">We carry a passion for performance marketing and have a knack for untangling even the toughest of knots.</p>
            <p class="text-bottom-margin">We are relentless in moving boundaries and carry out this spirited attitude into digital solutions. Digital solutions that engage, inspire and make you think. Make you curious.</p>
            <p>Taking on thought-provoking projects that challenge us creatively and make us go the extra mile is what we consider a way of life.</p>
        </div>
    </div>
</section>
<?php endif;
