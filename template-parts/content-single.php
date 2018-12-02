<?php

// function to display number of posts.

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

setPostViews(get_the_ID());
?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="sc-blog-detail">
                <div class="sc-blog-detail__image"><img src="<?= get_the_post_thumbnail_url() ?>" alt=""></div>
                <div class="sc-blog-detail__content">
                    <div class="sc-blog-detail__content__title"><?= get_the_title() ?></div>
                    <div class="sc-blog-detail__info">
                        <div class="sc-blog-detail__info__detail">
                            <div class="info__item"><?= translate_i18n('ngày đăng') ?> :<span class="info__item__content"><?= get_the_date(get_option('date_format')) ?></span></div>

                        </div>
                        <div class="sc-blog-detail__info__social">
                            <div class="info__item"><i class="fas fa-reply"></i><?= translate_i18n('Chia sẻ qua') ?></div>
                            <ul class="socials">
                                <li class="socials__item"><a class="socials__link" href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink() ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="https://twitter.com/home?status==<?= get_permalink() ?>"><i class="fab fa-twitter"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="https://plus.google.com/share?url=<?= get_permalink() ?>"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= get_permalink() ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="content-blog">
                    <?php the_content() ?>
                </div>
            </div>

            <div class="sc-tags"><?= translate_i18n('Tags') ?>:
                <?php
                $posttags = get_the_tags();
                if ($posttags) {
                    foreach($posttags as $tag) {
                        echo '<div class="sc-tags__item"><a class="sc-tags__link" href="#">'.$tag->name.'</a></div>';
                    }
                }
                ?>
            </div>
            <?php if (get_post_status(get_the_ID()) == 'private' ): ?>
            <div class="block__section">
                <div class="block__section__title"><?= get_comments_number() ?> <?= translate_i18n('Bình luận') ?></div>
                <div class="comments">
                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                </div>
            </div>
            <?php endif ?>
        </div>
        <div class="col-md-3">
            <?php
            get_sidebar();
            ?>
        </div>
    </div>
</div>
