<?php
$items = get_field('ingredient-items', $page->ID, []);
if (!empty($items)):
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
                $bg = wp_get_attachment_image_url($item['field-bg'], 'full');
                $title = $item['field-title'];
                $description = $item['field-desc'];
                $permalink = '';
                ?>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <?= do_shortcode('[ingredient title="' . $title . '" description="' . $description . '" bg="' . $bg . '" link="'.$permalink.'"/]'); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php endif; ?>
