<?php
$title = $content["title"];
$subtitle = $content["subtitle"];
$info = $content["info"];
$text = $content["text"];
$illustration = $content["illustration"];
$layout = $content["layout"];
var_dump($layout);
$var = ($layout == 'img_left') ? 'invert' : '';
var_dump($var);
?>

<section class="illustrated1_title_text <?php echo (isset($var)) ? $var : ''; ?>">
    <div class="layout_1_content">
        <h1><?php echo $title; ?></h1>
        <h2><?php echo $subtitle; ?></h2>
        <h3><?php echo $info; ?></h3>
        <div class="paragraph"><?php echo $text; ?></div>
    </div>
    <div>
        <img loading="lazy" src="<?php echo esc_url($illustration['url']); ?>" alt="<?php echo esc_attr($illustration['alt']); ?>">
    </div>
</section>