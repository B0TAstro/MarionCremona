<?php
/* Template Name: Cours et ateliers */
get_header();
?>
<main>
    <?php
    $section_1_title = get_field('section_1_title');
    $section_1_explanation = get_field('section_1_explanation');
    $link_1 = get_field('link_1');
    $section_2_title = get_field('section_2_title');
    ?>
    <section>
        <h1><?php echo $section_1_title; ?></h1>
        <div><?php echo $section_1_explanation; ?></div>
        <a href="<?php echo esc_url($link_1->guid); ?>">En savoir plus</a>
    </section>
    <section>
        <h2><?php echo $section_2_title; ?></h2>
        <div class="parent">
            <?php
            if (have_rows('contents')) :
                while (have_rows('contents')) : the_row();
                    $contents_illustration = get_sub_field('contents_illustration');
                    $contents_title = get_sub_field('contents_title');
                    $contents_price = get_sub_field('contents_price');
                    $contents_explanation = get_sub_field('contents_explanation');
                    $contents_link = get_sub_field('contents_link');
            ?>
                    <div>
                        <img loading="lazy" src="<?php echo esc_url($contents_illustration['url']); ?>" alt="<?php echo esc_attr($contents_illustration['alt']); ?>">
                        <h2><?php echo $contents_title; ?></h2>
                        <h3><?php echo $contents_price; ?></h3>
                        <div><?php echo $contents_explanation; ?></div>
                        <a href="<?php echo $contents_link; ?>">REJOINS MOI</a>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
</main>
<?php
get_footer();
?>