<?php
$map = get_field('address-map', $page->ID, [
    'address' => '',
    'lat' => '',
    'lng' => ''
]);
?>
<main>
    <div class="block-content">
        <div class="sc-info-contact">
            <div class="container">
                <div class="row">
                    <div class="sc-main-title sc-main-title--big"><?= get_field('title', $page->ID, '') ?></div>
                    <div class="subtitle"><?= $map['address'] ?></div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="block-info-contact">
                            <div class="item">
                                <label><?= translate_i18n('Gửi Thư Đến') ?></label>
                                <div class="info">
                                    <span class="ion-ios-email-outline icons"></span>
                                    address-map  <a class="info-content" href="#"><?= get_field('field-mail', $page->ID, '') ?></a>
                                </div>
                            </div>
                            <div class="item">
                                <label><?= translate_i18n('Gửi Fax Đến') ?></label>
                                <div class="info">
                                    <span class="ion-ios-email-outline icons"></span>
                                    <span class="info-content"><?= get_field('field-fax', $page->ID, '') ?></span>
                                </div>
                            </div>
                            <div class="item">
                                <label><?= translate_i18n('Số Điện Thoại') ?></label>
                                <div class="info">
                                    <span class="ion-ios-telephone-outline icons"></span>
                                    <span class="info-content"><?= get_field('field-phone', $page->ID, '') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="block-form-contact">
                            <form action="">
                                <div class="item">
                                    <label><?= translate_i18n('Tên của bạn') ?></label>
                                    <input type="text" name="fname" placeholder="<?= translate_i18n('Nguyễn Văn A') ?>">
                                </div>
                                <div class="item">
                                    <label><?= translate_i18n('Email của bạn') ?></label>
                                    <input type="text" name="femail" placeholder="<?= translate_i18n('nguyenvana@gmail.com') ?>">
                                </div>
                                <div class="item">
                                    <label><?= translate_i18n('Lời nhắn của bạn') ?></label>
                                    <textarea rows="4" cols="50"><?= translate_i18n('Để lại lời nhắn ...') ?></textarea>
                                </div>
                                <div class="sc-button"><a class="main-color" href="#"><span><?= translate_i18n('Gửi Lời Nhắn') ?></span></a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

        ?>
        <div id="googleMap"
             style="width:100%;height:400px;"
             data-lat="<?= $map['lat'] ?>" data-lng="<?= $map['lng'] ?>"></div>
    </div>
</main>
