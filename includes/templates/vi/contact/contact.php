<?php
$has_notify = false;
$secret = \includes\classes\Constants::CAPTCHA_SECRET;
$site_key = \includes\classes\Constants::CAPTCHA_SITEKEY;
if (!empty($_POST)) {
    $has_notify = true;
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $page = get_page($_POST['page_id']);
    $error = true;

    if (!empty($name) && !empty($email) && !empty($content)) {
        $desc = 'from: ' . $email . ' - ' . substr($content, 0, 15) . '...';
        $post_id = wp_insert_post([
            'post_title' => $desc,
            'post_content' => $content,
            'post_excerpt' => $content,
            'post_type' => 'contact',
            'post_author' => -1,
            'meta_input' => [
                'field-name' => $name,
                'field-content' => $content,
                'field-email' => $email
            ]
        ]);
        if (!empty($post_id)) {
            $error = false;
        }
    }

    $message = translate_i18n('Thao tác thành công');
    if ($error) {
        $message = translate_i18n('Thao tác thất bại');
    }
    $arr = [
        'error' => $error,
        'message' => $message
    ];
    exit(200);
}

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
                                <label><?= translate_i18n('Gửi Thư Đến') ?></label>
                                <div class="info">
                                    <span class="ion-ios-email-outline icons"></span>
                                    <?= translate_i18n('address-map') ?>  <a class="info-content" href="#"><?= get_field('field-mail', $page->ID, '') ?></a>
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
                            <form>
                                <?php if ($has_notify): ?>
                                <div class="notify <?= !empty($error) ? 'error' : 'success' ?>">
                                    <?= $message ?>
                                </div>
                                <?php endif ?>
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

                                <div class="g-recaptcha" data-sitekey="<?= $site_key ?>"
                                data-secret="<?= $secret ?>"></div>

                                <div class="sc-button">
                                    <a class="main-color" id="btn-sendcontact" href="#">
                                        <span><?= translate_i18n('Gửi Lời Nhắn') ?></span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="googleMap"
             style="width:100%;height:400px;"
             data-lat="<?= $map['lat'] ?>" data-lng="<?= $map['lng'] ?>"></div>
    </div>
</main>