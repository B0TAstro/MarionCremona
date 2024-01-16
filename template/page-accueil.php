<?php
/* Template Name: Accueil */
get_header();
?>
<main>
    <?php
    $mantra = get_field('mantra');
    $hook = get_field('hook');

    $section_1_title = get_field('section_1_title');
    $section_1_explanation = get_field('section_1_explanation');
    $link_1 = get_field('link_1');

    $section_2_title = get_field('section_2_title');
    $link_2 = get_field('link_2');
    ?>
    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-accueil/desktop-left_illustration.svg" alt="Illustration">
    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-accueil/desktop-right_illustration.svg" alt="Illustration">
    <section>
        <h1>MARION CREMONA</h1>
        <p><?php echo $mantra; ?></p>
        <div><?php echo $hook; ?></div>
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-accueil/arrow.svg" alt="Naviguation Arrow">
    </section>
    <section>
        <h2><?php echo $section_1_title; ?></h2>
        <div><?php echo $section_1_explanation; ?></div>
        <a href="<?php echo $link_1->guid; ?>">En savoir plus</a>
    </section>
    <section>
        <h2><?php echo $section_2_title; ?></h2>
        <div class="parent">
            <?php
            if (have_rows('contents')) :
                while (have_rows('contents')) : the_row();
                    $illustrated_text_title = get_sub_field('illustrated_text_title');
                    $illustrated_text_explanation = get_sub_field('illustrated_text_explanation');
                    $illustrated_text_illustration = get_sub_field('illustrated_text_illustration');
            ?>
                    <div>
                        <h3><?php echo $illustrated_text_title; ?></h3>
                        <div><?php echo $illustrated_text_explanation; ?></div>
                        <img loading="lazy" src="<?php echo esc_url($illustrated_text_illustration['url']); ?>" alt="<?php echo esc_attr($illustrated_text_illustration['alt']); ?>">
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <a href="<?php echo esc_url($link_2->guid); ?>">En savoir plus</a>
    </section>
</main>
<?php
get_footer();
?>