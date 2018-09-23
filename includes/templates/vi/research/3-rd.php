<?php
$items = get_field('rd-items', $page->ID, []);

if (count($items) > 0):
?>
<div class="sc-innovation--rd-center">
    <div class="block-section-lg">
        <div class="container">
            <div class="sc-main-title"><?= get_field('rd-title', $page->ID, '') ?></div>
            <?php foreach ($items as $item):
            $bg = wp_get_attachment_image_url($item['field-bg'], 'full');
            ?>
            <div class="col-md-4">
                <div class="sc-innovation__wrapper-item">
                    <div class="sc-innovation__item" style="background-image:url(<?= esc_url($bg) ?>)">
                        <div class="sc-innovation__title"><?= $item['field-title'] ?> </div>
                    </div>
                    <div class="sc-button sc-innovation__button"><a class="main-color" href="<?= $item['field-url'] ?>"><span><?= translate_i18n('Xem Thêm') ?></span></a></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>