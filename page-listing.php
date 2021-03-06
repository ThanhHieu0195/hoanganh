<?php /* Template Name: Listing page */
get_header();
$techs = get_field('tech-list', get_the_ID(), []);
if (!empty($techs)):
    ?>
    <main>
        <div class="block-content">
            <div class="sc-product-layout-1">
                <div class="container">
                    <?php foreach ($techs as $idx => $tech):
                        $pos_class = 'right';
                        if ($idx % 2 == 0) {
                            $pos_class = 'left';
                        }

                        $title = $tech['field-title'];
                        $content = $tech['field-desc'];
                        $bg = wp_get_attachment_image_url($tech['field-bg'], 'full');
                        $url = $tech['field-view_url'];
                        ?>
                        <div class="block-item <?= $pos_class ?>">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 item">
                                    <div class="block-image"><a href="<?= esc_url($url) ?>">
                                            <img src="<?= esc_url($bg) ?>"></a>
                                    </div>
                                </div>
                                <div class="<?= $pos_class == 'left' ? 'col-lg-offset-4' : ''  ?> col-md-offset-0 col-xs-12 col-sm-12 col-md-8">
                                    <div class="block-content">
                                        <div class="title"><?= esc_html($title) ?></div>
                                        <div class="description">
                                            <?= $content ?>
                                        </div>
                                        <div class="read-more"><?= translate_i18n('xem thêm') ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

<?php endif;
get_footer();
