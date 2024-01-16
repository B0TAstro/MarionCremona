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
    <section>
        <img loading="lazy" src="<?php echo esc_url($section_1_illustration['url']); ?>" alt="<?php echo esc_attr($section_1_illustration['alt']); ?>">
        <h1><?php echo $section_1_title; ?></h1>
        <div><?php echo $section_1_text; ?></div>
    </section>
    <section>
    <div><?php echo $section_2_description; ?></div>
        <img loading="lazy" src="<?php echo esc_url($section_2_illustration['url']); ?>" alt="<?php echo esc_attr($section_2_illustration['alt']); ?>">
    </section>
    <section>
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-psycho/desktop-top_left_illustration.svg" alt="Illustration">
        <h2><?php echo $section_3_title; ?></h2>
        <div><?php echo $section_3_explanation; ?></div>
        <p><?php echo $section_3_info; ?></p>
        <a href="<?php echo $section_3_link; ?>">REJOINS MOI</a>
    </section>
</main>
<?php
get_footer();
?>