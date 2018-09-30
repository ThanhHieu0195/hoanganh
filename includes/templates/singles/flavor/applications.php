<?php
$items = get_field('app-items', $page_id, []);

$top_left = wp_get_attachment_image_url(get_field('top-left', $page_id, ''), 'full');
$middle_left = wp_get_attachment_image_url(get_field('middle-left', $page_id, ''), 'full');
$bottom_left = wp_get_attachment_image_url(get_field('bottom-left', $page_id, ''), 'full');
$bottom_left_left = wp_get_attachment_image_url(get_field('bottom-left-left', $page_id, ''), 'full');

$top_right = wp_get_attachment_image_url(get_field('top-right', $page_id, ''), 'full');
$middle_right = wp_get_attachment_image_url(get_field('middle-right', $page_id, ''), 'full');
$middle_right_right = wp_get_attachment_image_url(get_field('middle-right-right', $page_id, ''), 'full');
$bottom_right = wp_get_attachment_image_url(get_field('bottom-right', $page_id, ''), 'full');
$bottom_right_right = wp_get_attachment_image_url(get_field('bottom-right-right', $page_id, ''), 'full');
?>
<div class="sc-technology-layout-1 parllax-common">
    <div>
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
        <div class="container">
            <div class="row">
                <div class="sc-main-title text-center">
                    <?= get_field('app-title', $page_id, '') ?>
                </div>
                <div class="sc-subtitle">
                    <?= get_field('app-concept', $page_id, '') ?>
                </div>
                <?php if (!empty($items)): ?>
                <?php foreach ($items as $item):
                    $bg = wp_get_attachment_image_url($item['field-bg'], 'full');
                    ?>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="block-item">
                        <div class="block-image"><img src="<?= esc_url($bg) ?>">
                        </div>
                        <div class="block-content">
                            <div class="title">
                                <?= $item['field-title'] ?>
                            </div>
                            <div class="description">
                                <?= $item['field-description'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
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
