<?php
get_header();
?>
<main>
    <section class="single_article">
        <article>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <?php
            $flexible_contents = get_field('flexible_content');
            foreach ($flexible_contents as $content) {
                $template_name = $content['acf_fc_layout'];
                $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);

                if (file_exists($template_file)) {

                    printf('<section class="layout_%s">', $template_name);
                    include($template_file);
                    printf('</section>');
                }
            }
            ?>
            <button id="backButton">RETOUR</button>

            <script>
                document.getElementById('backButton').addEventListener('click', function() {
                    window.history.back();
                });
            </script>
        </article>
    </section>
</main>
<?php
get_footer();
?>