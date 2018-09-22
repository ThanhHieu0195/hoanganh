<div class="sc-product-layout-2">
    <div class="container">
        <div class="row">
            <div class="sc-main-title text-center"><?= get_field('flavors-title', $page->ID, '') ?></div>
            <div class="sc-subtitle">
                <?= get_field('flavors-description', $page->ID, '') ?>
            </div>
            <?php
            $items = get_field('flavors-items', $page->ID, []);
            foreach ($items as $item):
                $bg = wp_get_attachment_image_url($item['field-bg'], 'full');
                ?>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <?= do_shortcode('[flavor title="' . $item['field-title'] . '" description="' . $item['field-description'] . '" bg="' . $bg . '"/]'); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
