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
    <section>
        <div>
            <h1>ME DÉCOUVRIR ...</h1>
            <h3><?php echo $section_1_title; ?></h3>
            <div><?php echo $section_1_explanation; ?></div>
        </div>
        <img loading="lazy" src="<?php echo esc_url($section_1_photo['url']); ?>" alt="<?php echo esc_attr($section_1_photo['alt']); ?>">
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
    </section>
    <section>
        <h2><?php echo $section_3_title; ?></h2>
        <div class="parent-2">
            <?php
            if (have_rows('curse')) :
                $i = 0;
                while (have_rows('curse')) : the_row();
                    $text = get_sub_field('text');
                    $class = $i % 2 == 0 ?"default":"alt";
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
        <img loading="lazy" src="<?php echo esc_url($illustrated_text_illustration['url']); ?>" alt="<?php echo esc_attr($illustrated_text_illustration['alt']); ?>">
    </section>
</main>
<?php
get_footer();
?>