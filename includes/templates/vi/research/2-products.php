<?php
$items = get_field('inv-items', $page->ID, []);

if (!empty($items)):
?>
<div class="sc-innovation">
    <div class="block-section-lg">
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
    </div>
</div>
<?php endif; ?>