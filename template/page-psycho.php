<?php
/* Template Name: Accompagnement psycho */
get_header();
?>
<main>
    <?php
    $section_1_title = get_field('section_1_title');
    $section_1_explanation = get_field('section_1_explanation');
    $section_1_info = get_field('section_1_info');
    $section_1_link = get_field('section_1_link');

    $section_2_quote = get_field('section_2_quote');
    $section_2_author = get_field('section_2_author');

    $section_3_title = get_field('section_3_title');
    $section_3_explanation = get_field('section_3_explanation');
    $section_3_subtitle = get_field('section_3_subtitle');
    $section_3_text = get_field('section_3_text');
    ?>

    <section class="illustrated4_center_title_text_psycho">
        <div class="layout_4_top_psycho">
            <h1><?php echo $section_1_title; ?></h1>
        </div>
        <div class="layout_4_mid_psycho">
            <div><?php echo $section_1_explanation; ?></div>
        </div>
        <div class="layout_4_bottom_psycho">
            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-psycho/desktop-top_left_illustration.svg" alt="Illustration">
            <div>
                <h3><?php echo $section_1_info; ?></h3>
                <a class="link" href="<?php echo $section_1_link; ?>">REJOINS MOI</a>
            </div>
        </div>
    </section>

    <section class="quote_psycho">
        <div class="content_quote_psycho">
            <p><?php echo $section_2_quote; ?></p>
            <p id="autor_psycho"><?php echo $section_2_author; ?></p>
        </div>
    </section>

    <section class="illustrated2_title_text_psycho" <?php echo (isset($var)) ? $var : ''; ?>">
        <div class="wrap">
            <div>
                <div class="layout_2_top">
                    <div class="layout_2_content">
                        <h2><?php echo $section_3_title; ?></h2>
                    </div>
                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-psycho/desktop-mid_illustration.svg" alt="Illustration">
                </div>
                <div class="layout_2_bottom">
                    <div><?php echo $section_3_explanation; ?></div>
                </div>
            </div>
        </div>
    </section>


    <section class="illustrated2_title_text_psycho_invert" <?php echo (isset($var)) ? $var : ''; ?>">
        <div class="wrap">
            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-psycho/desktop-bottom_left_illustration.svg" alt="Illustration">
            <div>
                <div class="layout_2_top">
                    <div class="layout_2_content">
                        <h3><?php echo $section_3_subtitle; ?></h3>
                    </div>
                </div>
                <div class="layout_2_bottom">
                    <div><?php echo $section_3_text; ?></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>