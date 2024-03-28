<?php
/* Template Name: Qui-suis je ? */
get_header();
?>
<main>
    <?php
    $section_1_title = get_field('section_1_title');
    $section_1_explanation = get_field('section_1_explanation');
    $section_1_photo = get_field('section_1_photo');
    $section_2_title = get_field('section_2_title');
    $section_3_title = get_field('section_3_title');
    ?>
    <div class="wrap">
        <section class="bio">
            <div class="bio_content">
                <h1>ME DÉCOUVRIR ...</h1>
                <h3><?php echo $section_1_title; ?></h3>
                <div><?php echo $section_1_explanation; ?></div>
            </div>
            <img loading="lazy" src="<?php echo esc_url($section_1_photo['url']); ?>" alt="<?php echo esc_attr($section_1_photo['alt']); ?>">
        </section>
    </div>
    <section class="values">
        <div class="wrap">
            <h2><?php echo $section_2_title; ?></h2>
            <div class="parent">
                <?php
                if (have_rows('contents')) :
                    while (have_rows('contents')) : the_row();
                        $illustrated_text_title = get_sub_field('illustrated_text_title');
                        $illustrated_text_illustration = get_sub_field('illustrated_text_illustration');
                ?>
                        <div>
                            <img loading="lazy" src="<?php echo esc_url($illustrated_text_illustration['url']); ?>" alt="<?php echo esc_attr($illustrated_text_illustration['alt']); ?>">
                            <h3><?php echo $illustrated_text_title; ?></h3>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <div class="wrap">
        <section class="curse">
            <h2><?php echo $section_3_title; ?></h2>
            <div class="content">
                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-who/desktop-illustration.svg" alt="Illustration">
                <div class="parent-2">
                    <?php
                    if (have_rows('curse')) :
                        $i = 0;
                        while (have_rows('curse')) : the_row();
                            $text = get_sub_field('text');
                            $class = $i % 2 == 0 ? "default" : "alt";
                    ?>
                            <div class="<?php echo $class; ?>">
                                <div><?php echo $text; ?></div>
                            </div>
                    <?php
                            $i++;
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
        </section>
    </div>
</main>
<?php
get_footer();
?>