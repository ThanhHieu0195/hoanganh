<?php
$map = get_field('address-map', $page->ID, [
    'address' => '',
    'lat' => '',
    'lng' => ''
]);
$site_key = \includes\classes\Constants::CAPTCHA_SITEKEY;

?>
<main>
    <div class="block-content">
        <div class="sc-info-contact">
            <div class="container">
                <div class="row">
                    <div class="sc-main-title sc-main-title--big">
                        <div class="sc-main-title--big__text">
                            <?= get_field('title', $page->ID, '') ?>
                        </div>
                        <div class="sc-main-title--big__icon"></div>
                    </div>
                    <div class="subtitle"><?= $map['address'] ?></div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="block-info-contact">
                            <div class="item">
                                <label><?= translate_i18n('Địa chỉ email') ?></label>
                                <div class="info">
                                    <span class="ion-ios-email-outline icons"></span>
                                   <a class="info-content" href="#"><?= get_field('field-mail', $page->ID, '') ?></a>
                                </div>
                            </div>
                            <div class="item">
                                <label><?= translate_i18n('Fax') ?></label>
                                <div class="info">
                                    <span class="ion-ios-email-outline icons"></span>
                                    <span class="info-content"><?= get_field('field-fax', $page->ID, '') ?></span>
                                </div>
                            </div>
                            <div class="item">
                                <label><?= translate_i18n('Số Điện Thoại') ?></label>
                                <div class="info">
                                    <span class="ion-ios-telephone-outline icons"></span>
                                    <span class="info-content">
                                        <a href="tel:<?= get_field('field-phone', $page->ID, '') ?>">
                                            <?= get_field('field-phone', $page->ID, '') ?>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="block-form-contact">
                            <form>
                                <div id="message-error" style="display: none">

                                </div>
                                <input type="hidden" name="page_id" value="<?= $page->ID ?>">
                                <div class="item">
                                    <label><?= translate_i18n('Tên của bạn') ?></label>
                                    <input type="text" name="name" placeholder="<?= translate_i18n('Nguyễn Văn A') ?>">
                                </div>
                                <div class="item">
                                    <label><?= translate_i18n('Email của bạn') ?></label>
                                    <input type="text" name="email" placeholder="<?= translate_i18n('nguyenvana@gmail.com') ?>">
                                </div>
                                <div class="item">
                                    <label><?= translate_i18n('Lời nhắn của bạn') ?></label>
                                    <textarea name="content" rows="4" cols="50"><?= translate_i18n('Để lại lời nhắn ...') ?></textarea>
                                </div>

                                <div id="g-recaptcha" class="g-recaptcha" data-sitekey="<?= $site_key ?>"></div>
                                <div class="sc-button">
                                    <a class="main-color" id="btn-sendcontact" href="javascript:void(0)" onclick="recaptcha.methods.verify()">
                                        <span><?= translate_i18n('Gửi Lời Nhắn') ?></span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d437.7442301106029!2d106.69950284667705!3d10.716639306380223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fc277d7f625%3A0x70d17c5037e6d0a0!2sHO%C3%80NG+ANH+Flavors+and+Food+Ingredients!5e1!3m2!1sen!2s!4v1543813072770" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</main>