<?php
$items = get_field('app-items', $page_id, []);
?>
<div class="sc-technology-layout-1 parllax-common">
    <div id="parallax">
        <div class="layer" data-depth="0.1">
            <div class="block-layer top-left"><img src="<?= get_template_directory_uri() ?>/assets/images/flavor/h4-rev-img-34.png" alt="">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-layer middle-left"><img src="<?= get_template_directory_uri() ?>/assets/images/flavor/h4-rev-img-29.png" alt="">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-layer bottom-left"><img src="<?= get_template_directory_uri() ?>/assets/images/flavor/h4-rev-img-33.png" alt="">
            </div>
            <div class="block-layer bottom-left-left"><img src="<?= get_template_directory_uri() ?>/assets/images/flavor/h4-rev-img-31.png" alt="">
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
            <div class="block-layer top-right"><img src="<?= get_template_directory_uri() ?>/assets/images/flavor/h4-rev-img-37.png" alt="">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-layer middle-right"><img src="<?= get_template_directory_uri() ?>/assets/images/flavor/h4-rev-img-36.png" alt="">
            </div>
            <div class="block-layer middle-right-right"><img src="<?= get_template_directory_uri() ?>/assets/images/flavor/h4-rev-img-35.png" alt="">
            </div>
        </div>
        <div class="layer" data-depth="0.1">
            <div class="block-layer bottom-right"><img src="<?= get_template_directory_uri() ?>/assets/images/flavor/h4-rev-img-38.png" alt="">
            </div>
            <div class="block-layer bottom-right-right"><img src="<?= get_template_directory_uri() ?>/assets/images/flavor/h4-rev-img-5.png" alt="">
            </div>
        </div>
    </div>
</div>
