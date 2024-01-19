<?php
/* Template Name: Activisme Sacré */
get_header();
?>
<main>
    <?php
    $section_1_quote = get_field('section_1_quote');
    $section_1_autor = get_field('section_1_autor');

    $section_2_title = get_field('section_2_title');
    $section_2_text = get_field('section_2_text');

    $section_3_title = get_field('section_3_title');
    $section_3_text = get_field('section_3_text');
    $section_3_illustration = get_field('section_3_illustration');
    ?>

    <section class="quote_activism">
        <div class="content_quote_activism">
            <p><?php echo $section_1_quote; ?></p>
            <p id="autor_activism"><?php echo $section_1_autor; ?></p>
        </div>
    </section>


    <section class="illustrated2_center_title_text_activism">
        <div class="wrap">
            <div class="layout_3_top_activism">
                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-activism/activism_desktop_illu_gauche.svg" alt="Illustration">
                <div class="content_activism">
                    <h1><?php echo $section_2_title; ?></h1>
                </div>
            </div>
            <div class="layout_3_bottom_activism">
                <div><?php echo $section_2_text; ?></div>
            </div>
        </div>
    </section>

    <section class="illustrated1_title_text_activism <?php echo (isset($var)) ? $var : ''; ?>">
        <div class="wrap">
            <div class="container_activism">
                <div class="layout_1_content_activism">
                    <h2><?php echo $section_3_title; ?></h2>
                    <?php echo $section_3_text; ?>
                </div>
                <div>
                    <img loading="lazy" src="<?php echo esc_url($section_3_illustration['url']); ?>" alt="<?php echo esc_attr($section_3_illustration['alt']); ?>">
                </div>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
?>