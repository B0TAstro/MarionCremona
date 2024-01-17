<?php
$title = $content["title"];
$subtitle = $content["subtitle"];
$info = $content["info"];
$text = $content["text"];
$illustration1 = $content["illustration1"];
$illustration2 = $content["illustration2"];
$layout = $content["layout"];
var_dump($layout);
$var = ($layout == 'text_right') ? 'invert' : '';
var_dump($var);
?>

<section class="illustrated2_title_text <?php echo (isset($var)) ? $var : ''; ?>">
    <div>
        <div class="layout_2_top">
            <div class="layout_2_content">
                <h1><?php echo $title; ?></h1>
                <h2><?php echo $subtitle; ?></h2>
            </div>
            <img loading="lazy" src="<?php echo esc_url($illustration1['url']); ?>" alt="<?php echo esc_attr($illustration1['alt']); ?>">
        </div>
        <div class="layout_2_bottom">
            <h3><?php echo $info; ?></h3>
            <div class="paragraph"><?php echo $text; ?></p></div>
        </div>
    </div>
    <div>
        <img loading="lazy" src="<?php echo esc_url($illustration2['url']); ?>" alt="<?php echo esc_attr($illustration2['alt']); ?>">
    </div>
</section>