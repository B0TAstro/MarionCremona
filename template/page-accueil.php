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
    <div class="content-home">
        <img class="left" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-accueil/desktop-left_illustration.svg" alt="Illustration">
        <img class="mobile-left" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-accueil/mobile-left_illustration.svg" alt="Illustration">
        <div class="container">
            <div class="art">
                <section class="mantra">
                    <h1>MARION CREMONA</h1>
                    <p><?php echo $mantra; ?></p>
                    <div><?php echo $hook; ?></div>
                    <a href="#next" class=" arrow"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-accueil/arrow.svg" alt="Naviguation Arrow"></a>
                </section>
            </div>
            <div class="art">
                <section class="qoya">
                    <h2><?php echo $section_1_title; ?></h2>
                    <div class="paragraph"><?php echo $section_1_explanation; ?></div>
                    <a class="link" href="<?php echo esc_url($link_1); ?>">EN SAVOIR PLUS</a>
                </section>
            </div>
        </div>
        <img class="right" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-accueil/desktop-right_illustration.svg" alt="Illustration">
        <img class="mobile-right" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/page-accueil/mobile-right_illustration.svg" alt="Illustration">
    </div>
    <section class="course" id="next">
        <div class="wrap">
            <h2><?php echo $section_2_title; ?></h2>
            <div class="parent">
                <?php
                if (have_rows('contents')) :
                    while (have_rows('contents')) : the_row();
                        $illustrated_text_illustration = get_sub_field('illustrated_text_illustration');
                        $illustrated_text_title = get_sub_field('illustrated_text_title');
                        $illustrated_text_explanation = get_sub_field('illustrated_text_explanation');
                ?>
                        <div>
                            <img loading="lazy" src="<?php echo esc_url($illustrated_text_illustration['url']); ?>" alt="<?php echo esc_attr($illustrated_text_illustration['alt']); ?>">
                            <h3><?php echo $illustrated_text_title; ?></h3>
                            <div class="paragraph"><?php echo $illustrated_text_explanation; ?></div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
            <a class="link" href="<?php echo esc_url($link_2); ?>">EN SAVOIR PLUS</a>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".arrow").on('click', function(event) {
                event.preventDefault();
                var target = $(this).attr('href');
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 1000);
            });
        });
    </script>

</main>
<?php
get_footer();
?>