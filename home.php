<?php
get_header();
?>
<main>
    <section class="blog">
        <div class="wrap">
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <a href="<?php the_permalink(); ?>">LIRE LA SUITE</a>
                </article>
            <?php endwhile; ?>
        </div>
    </section>
</main>
<?php
get_footer();
?>