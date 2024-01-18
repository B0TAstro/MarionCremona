<?php
$title = $content["title"];
$repetor = $content["repetor"];
?>

<section>
    <h2><?php echo $title; ?></h2>
    <div class="parent">
        <?php
        if (have_rows('repetor')) :
            while (have_rows('repetor')) : the_row();
                $illustration = get_sub_field('illustration');
                $subtitle = get_sub_field("subtitle");
                $text = get_sub_field("text");
                $name_link = get_sub_field("name_link");
                $link = get_sub_field("link");
        ?>
                <div>
                    <img loading="lazy" src="<?php echo esc_url($illustration['url']); ?>" alt="<?php echo esc_attr($illustration['alt']); ?>">
                    <h3><?php echo $subtitle; ?></h3>
                    <div><?php echo $text; ?></div>
                    <a href="<?php echo $link; ?>"><?php echo $name_link; ?></a>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>