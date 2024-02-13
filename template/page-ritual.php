<?php
/* Template Name: Rituels */
get_header();
?>
<main>
    <?php
    $section_1_title = get_field('section_1_title');
    $section_1_text = get_field('section_1_text');
    $section_1_illustration = get_field('section_1_illustration');

    $section_2_description = get_field('section_2_description');
    $section_2_illustration = get_field('section_2_illustration');

    $section_3_title = get_field('section_3_title');
    $section_3_explanation = get_field('section_3_explanation');
    $section_3_info = get_field('section_3_info');
    $section_3_link = get_field('section_3_link');
    ?>
    <h1 id="ritual"><?php echo $section_1_title; ?></h1>
    <section class="illustrated1_title_ritual <?php echo (isset($var)) ? $var : ''; ?>">
        <div class="wrap">
            <div class="container_ritual">
                <div>
                    <img loading="lazy" src="<?php echo esc_url($section_1_illustration['url']); ?>" alt="<?php echo esc_attr($section_1_illustration['alt']); ?>">
                </div>
                <div class="layout_1_content_ritual">
                    <div><?php echo $section_1_text; ?></div>
                </div>
            </div>
        </div>
    </section>

    <section class="illustrated1_title_ritual_invert">
        <div class="wrap">
            <div><?php echo $section_2_description; ?></div>
            <img loading="lazy" src="<?php echo esc_url($section_2_illustration['url']); ?>" alt="<?php echo esc_attr($section_2_illustration['alt']); ?>">
        </div>
    </section>

    <section class="illustrated2_center_title_text_ritual">
        <div class="wrap">
            <div class="layout_3_top_ritual">
                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-psycho/desktop-mid_illustration.svg" alt="Illustration">
                <div class="content_ritual">
                    <h2><?php echo $section_3_title; ?></h2>
                </div>
            </div>
            <div class="layout_3_mid_ritual">
                <div><?php echo $section_3_explanation; ?></div>
                <h3><?php echo $section_3_info; ?></h3>
            </div>
            <div class="layout_3_bottom_ritual">
                <a class="link" href="<?php echo $section_3_link; ?>">REJOINS MOI</a>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>