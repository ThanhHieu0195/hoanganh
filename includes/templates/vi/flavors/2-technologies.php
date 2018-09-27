<?php
$items = get_field('technology-items', $page->ID, []);

$top_left = wp_get_attachment_image_url(get_field('top-left', $page->ID, ''), 'full');
$middle_left = wp_get_attachment_image_url(get_field('middle-left', $page->ID, ''), 'full');
$bottom_left = wp_get_attachment_image_url(get_field('bottom-left', $page->ID, ''), 'full');
$bottom_left_left = wp_get_attachment_image_url(get_field('bottom-left-left', $page->ID, ''), 'full');

$top_right = wp_get_attachment_image_url(get_field('top-right', $page->ID, ''), 'full');
$middle_right = wp_get_attachment_image_url(get_field('middle-right', $page->ID, ''), 'full');
$middle_right_right = wp_get_attachment_image_url(get_field('middle-right-right', $page->ID, ''), 'full');
$bottom_right = wp_get_attachment_image_url(get_field('bottom-right', $page->ID, ''), 'full');
$bottom_right_right = wp_get_attachment_image_url(get_field('bottom-right-right', $page->ID, ''), 'full');
?>
<div class="sc-technology-layout-1">
    <div class="container">
        <div class="layer" data-depth="0.1">
            <div class="block-layer top-left"><img src="<?= esc_url($top_left) ?>" alt="">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-layer middle-left"><img src="<?= esc_url($middle_left) ?>" alt="">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-layer bottom-left"><img src="<?= esc_url($bottom_left) ?>" alt="">
            </div>
            <div class="block-layer bottom-left-left"><img src="<?= esc_url($bottom_left_left) ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="sc-main-title text-center"><?= get_field('technology-title') ?></div>
            <div class="sc-subtitle">
                <?= get_field('technology-description') ?>
            </div>
            <?php foreach ($items as $idx => $item):
                // generate sc
                $str_attrs = '';
                $str_attrs .= "title='{$item['field-title']}' ";
                $str_attrs .= "description='{$item['field-description']}' ";
                $bg = wp_get_attachment_image_url($item['field-bg'], 'full');
                $str_attrs .= "bg='{$bg}' ";
                $sc = "[flavor-technology {$str_attrs}/]";
                $arr = [3, 4];
                $class_sc = 'col-xs-12 col-sm-12 col-md-4';
                if ( in_array($idx, $arr) ) {
                    $arr[array_search($idx, $arr)] += $arr[1];
                    $class_sc = 'col-xs-12 col-sm-12 col-md-6';
                }
                ?>
            <div class="<?= $class_sc ?>">
                <?= do_shortcode($sc) ?>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-layer top-right"><img src="<?= esc_url($top_right) ?>" alt="">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-layer middle-right"><img src="<?= esc_url($middle_right) ?>" alt="">
            </div>
            <div class="block-layer middle-right-right"><img src="<?= esc_url($middle_right_right) ?>" alt="">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-layer bottom-right"><img src="<?= esc_url($bottom_right) ?>" alt="">
            </div>
            <div class="block-layer bottom-right-right"><img src="<?= esc_url($bottom_right_right) ?>" alt="">
            </div>
        </div>
    </div>
</div>