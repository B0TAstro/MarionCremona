<?php
get_header();
?>
<main>
    <div class="content-404">
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/404/desktop-left_illustration.svg" alt="Illustration">
        <div class="error">
            <h1>404</h1>
            <p>OUPS ! Cette page est introuvable.</p>
            <button id="backButton">RETOUR</button>
        </div>

        <script>
            document.getElementById('backButton').addEventListener('click', function() {
                window.history.back();
            });
        </script>
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/template/404/desktop-right_illustration.svg" alt="Illustration">
    </div>
</main>
<?php
get_footer();
?>