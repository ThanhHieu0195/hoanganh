<?php
$num = get_field('ingredient-number', $page->ID, '-1');
$items = get_posts([
    'post_type' => 'ingredient',
    'numberposts' => intval($num)
]);
?>
<div class="sc-product-layout-2">
    <div class="container">
        <div class="row">
            <div class="sc-main-title text-center"><?= get_field('ingredient-title', $page->ID, '') ?></div>
            <div class="sc-subtitle">
                <?= get_field('ingredient-description', $page->ID, '') ?>
            </div>
            <?php
            foreach ($items as $item):
                /**
                 * @var $item WP_Post
                 */
                $bg = get_the_post_thumbnail_url($item->ID);
                $title = $item->post_title;
                $description = $item->post_excerpt;
                $permalink = get_permalink($item->ID);
                ?>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <?= do_shortcode('[ingredient title="' . $title . '" description="' . $description . '" bg="' . $bg . '" link="'.$permalink.'"/]'); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
