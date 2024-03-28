<?php
/* Template Name: Mentions Légales */
get_header();

$title = get_field('title');
$text = get_field('text');
?>

<style>
    .mention {
        margin : 187px 0 100px 0;
    }

    .mention h1 {
        margin-bottom: 20px;
    }
</style>


<main>
    <div class="wrap">
        <div class="mention">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $text; ?></p>
        </div>
    </div>
</main>

<?php
get_footer();
?>