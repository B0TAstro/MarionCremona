<?php
$title = $content["title"];
$subtitle = $content["subtitle"];
$info = $content["info"];
$text = $content["text"];
$illustration1 = $content["illustration1"];
$illustration2 = $content["illustration2"];
?>

<section class="illustrated2_center_title_text">
    <div class="layout_3_top">
        <img loading="lazy" src="<?php echo esc_url($illustration1['url']); ?>" alt="<?php echo esc_attr($illustration1['alt']); ?>">
        <div class="content">
            <h1><?php echo $title; ?></h1>
            <h2><?php echo $subtitle; ?></h2>
        </div>
        <img loading="lazy" src="<?php echo esc_url($illustration2['url']); ?>" alt="<?php echo esc_attr($illustration2['alt']); ?>">
    </div>
    <div class="layout_3_bottom">
        <h3><?php echo $info; ?></h3>
        <div class="paragraph"><?php echo $text; ?></p>
        </div>
    </div>
</section>