<?php
$title = $content["title"];
$info = $content["info"];
$link = $content["link"];
$text1 = $content["text1"];
$text2 = $content["text2"];
$illustration1 = $content["illustration1"];
$illustration2 = $content["illustration2"];
$illustration3 = $content["illustration3"];
$illustration4 = $content["illustration4"];
?>

<section>
    <div class="layout_4_top">
        <img loading="lazy" src="<?php echo esc_url($illustration1['url']); ?>" alt="<?php echo esc_attr($illustration1['alt']); ?>">
        <h1><?php echo $title; ?></h1>
        <img loading="lazy" src="<?php echo esc_url($illustration2['url']); ?>" alt="<?php echo esc_attr($illustration2['alt']); ?>">
    </div>
    <div class="layout_4_mid">
        <div class="paragraph"><?php echo $text; ?></p>
    </div>
    <div class="layout_4_bottom">
        <img loading="lazy" src="<?php echo esc_url($illustration3['url']); ?>" alt="<?php echo esc_attr($illustration3['alt']); ?>">
        <div>
            <h3><?php echo $info; ?></h3>
            <a href="<?php echo $link; ?>">EN SAVOIR PLUS</a>
        </div>
        <img loading="lazy" src="<?php echo esc_url($illustration4['url']); ?>" alt="<?php echo esc_attr($illustration4['alt']); ?>">
    </div>
</section>