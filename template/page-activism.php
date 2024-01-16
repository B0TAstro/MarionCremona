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
    <section>
        <p><?php echo $section_1_quote; ?></p>
        <p><?php echo $section_1_autor; ?></p>
    </section>
    <section>
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-psycho/desktop-top_left_illustration.svg" alt="Illustration">
        <h1><?php echo $section_2_title; ?></h1>
        <div><?php echo $section_2_text; ?></div>
    </section>
    <section>
        <h2><?php echo $section_3_title; ?></h2>
        <div><?php echo $section_3_text; ?><div>
        <img loading="lazy" src="<?php echo esc_url($section_3_illustration['url']); ?>" alt="<?php echo esc_attr($section_3_illustration['alt']); ?>">
    </section>
</main>
<?php
get_footer();
?>