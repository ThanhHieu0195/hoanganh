<?php
$items = get_field('gf-items', $page_id, []);
?>
<div class="sc-carousel-layout-2">
    <div class="carousel-slider">
        <div class="container">
            <div class="carousel-slide-wrapper">
                <div class="sc-main-title text-center"><?= get_field('gf-title', $page_id, '') ?></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="carousel-slide-for">
                            <ul class="nav nav-tabs" role="tablist">
                                <?php if (count($items) > 0): ?>
                                <?php foreach ($items as $idx => $item):
                                    $bg = wp_get_attachment_image_url($item['field-bg'], 'full');
                                    $class_active = $idx == 0 ? 'active' : '';
                                    ?>
                                <li class="nav-item carousel-slide-for__item">
                                    <a class="nav-link active" href="#flavor-<?= $idx ?>" role="tab" data-toggle="tab">
                                        <div class="holder-wrapper"><img class="img-responsive" src="<?= esc_url($bg) ?>" alt="slide-01">
                                        </div>
                                        <div class="block-title">
                                            <h4><?= $item['field-title'] ?></h4>
                                        </div>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="tab-content">
                        <?php foreach ($items as $idx => $item):
                            $class_active = $idx == 0 ? 'in active' : '';
                            ?>
                            <div class="tab-pane fade <?= $class_active ?> carousel-slide-nav__item block-item" id="flavor-<?= $idx ?>" role="tabpanel">
                                <div class="block-content">
                                    <h3 class="title"><?= $item['field-title'] ?></h3>
                                    <div class="description">
                                        <?= $item['field-concept'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
