<?php
get_header();
?>
<main>

    <article>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <button id="backButton">RETOUR</button>

        <script>
            document.getElementById('backButton').addEventListener('click', function() {
                window.history.back();
            });
        </script>
    </article>
</main>
<?php
get_footer();
?>