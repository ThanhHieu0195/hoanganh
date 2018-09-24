<?php
$items = get_field('p-items', $page_id, []);
?>
<div class="sc-product-layout-2 layout-3">
    <div class="container">
        <div class="row">
            <div class="sc-main-title text-center">
                <?= get_field('p-title', $page_id, '') ?>
            </div>
            <div class="sc-subtitle">
                <?= get_field('p-concept', $page_id, '') ?>
            </div>
            <?php
            if (!empty($items)):
            foreach ($items as $item):
                $bg = wp_get_attachment_image_url($item['field-bg'], 'full');
            ?>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="block-item">
                    <div class="block-image"><img src="<?= esc_url($bg) ?>">
                    </div>
                    <div class="block-content">
                        <div class="title"><?= $item['field-title'] ?></div>
                        <div class="description">
                            <?= $item['field-description'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif ?>
        </div>
<!--        <div class="sc-button"><a class="main-color" href="#"><span>Xem Thêm</span></a>-->
        </div>
    </div>
</div>
