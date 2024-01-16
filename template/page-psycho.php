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
    <section>
        <h1><?php echo $section_1_title; ?></h1>
        <div><?php echo $section_1_explanation; ?></div>
        <h3><?php echo $section_1_info; ?></h3>
        <a href="<?php echo $section_1_link; ?>">REJOINS MOI</a>
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-psycho/desktop-top_left_illustration.svg" alt="Illustration">
    </section>
    <section>
        <p><?php echo $section_2_quote; ?></p>
        <p><?php echo $section_2_author; ?></p>
    </section>
    <section>
        <h2><?php echo $section_3_title; ?></h2>
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-psycho/desktop-mid_illustration.svg" alt="Illustration">
            <div><?php echo $section_3_explanation; ?></div>
        <h3><?php echo $section_3_subtitle; ?></h3>
        <div><?php echo $section_3_text; ?></div>
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-psycho/desktop-bottom_left_illustration.svg" alt="Illustration">
    </section>
</main>
<?php
get_footer();
?>