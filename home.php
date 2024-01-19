<?php
get_header();
?>
<main>
    <section class="blog">
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
                <a href="<?php the_permalink(); ?>">Lire la suite</a>
            </article>
        <?php endwhile; ?>
    </section>
</main>
<?php
get_footer();
?>