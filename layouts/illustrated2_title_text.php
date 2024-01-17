<?php
$title = $content["title"];
$subtitle = $content["subtitle"];
$info = $content["info"];
$text = $content["text"];
$illustration1 = $content["illustration1"];
$illustration2 = $content["illustration2"];
$layout = $content["layout"];
$var = ($layout == 'img_left') ? 'invert' : '';
?>

<section class="imgs_text <?php echo (isset($var)) ? $var : ''; ?>">
    <div class="top">
        <div class="content">
            <h1><?php echo $title; ?></h1>
            <h2><?php echo $subtitle; ?></h2>
        </div>
        <img loading="lazy" src="<?php echo esc_url($illustration1['url']); ?>" alt="<?php echo esc_attr($illustration1['alt']); ?>">
    </div>
    <div class="bottom">
        <div class="">
            <h3><?php echo $info; ?></h3>
            <div class="paragraph"><?php echo $text; ?></p>
            </div>
        </div>
        <img loading="lazy" src="<?php echo esc_url($illustration2['url']); ?>" alt="<?php echo esc_attr($illustration2['alt']); ?>">
    </div>
</section>