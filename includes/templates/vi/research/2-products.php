<?php
$items = get_field('inv-items', $page->ID, []);

$bg_top = wp_get_attachment_image_url(get_field('inv_bg_top', $page->ID, ''), 'full');
$bg_bottom = wp_get_attachment_image_url(get_field('inv_bg_bottom', $page->ID, ''), 'full');
$bg_right = wp_get_attachment_image_url(get_field('inv_bg_right', $page->ID, ''), 'full');
$bg_left = wp_get_attachment_image_url(get_field('inv_bg_left', $page->ID, ''), 'full');

if (!empty($items)):
?>
<div class="sc-innovation">
    <div class="block-section-lg" id="parallax">
        <div class="layer" data-depth="0.1">
            <div class="block-item top-left"><img src="<?= $bg_left ?>" alt=""></div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-item bottom-left"><img src="<?= $bg_bottom ?>" alt=""></div>
        </div>
        <div class="container">
            <div class="sc-main-title"><?= get_field('inv-title', $page->ID, '') ?></div>
            <?php foreach ($items as $item):
                $bg = wp_get_attachment_image_url($item['field-bg'], 'full');
                ?>
            <div class="col-md-6">
                <div class="sc-innovation__item" style="background-image:url(<?= esc_url($bg) ?>);">
                    <div class="sc-innovation__title"><?= $item['field-item'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-item top-right"><img src="<?= $bg_top ?>" alt=""></div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-item bottom-right"><img src="<?= $bg_right ?>" alt=""></div>
        </div>

    </div>
</div>
<?php endif; ?>