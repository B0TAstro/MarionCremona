<?php
$title = $content["title"];
$repetor = $content["repetor"];
$name_link = $content["name_link"];
$link = $content["link"];
$layout_4 = $content["layout_4"];
?>

<style>
    .carrousel {
        <?php if ($layout_4 == 'green') : ?>background-color: #999A8D;
        <?php elseif ($layout_4 == 'yellow') : ?>background-color: #E2B24C;
        <?php elseif ($layout_4 == 'pink') : ?>background-color: #BF7862;
        <?php endif; ?>
    }
</style>

<section class="carrousel">
    <h2><?php echo $title; ?></h2>
    <div class="parent">
        <?php
        foreach ($repetor as $value) {
            $illustration = $value["illustration"];
            $subtitle = $value["subtitle"];
            $text = $value["text"];
        ?>
            <div>
                <img loading="lazy" src="<?php echo esc_url($illustration['url']); ?>" alt="<?php echo esc_attr($illustration['alt']); ?>">
                <h3><?php echo $subtitle; ?></h3>
                <div><?php echo $text; ?></div>
            </div>
        <?php
        }
        ?>
    </div>
    <a href="<?php echo $link; ?>"><?php echo $name_link; ?></a>
</section>
