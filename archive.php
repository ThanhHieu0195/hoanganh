<?php
get_header();

$category = get_the_category();

$numpage = isset($_GET['numpage']) ? intval($_GET['numpage']) : 1;
$numberposts = get_field('numberposts', $page->ID, -1);

$posts = get_posts([
    'numberposts' => $numberposts,
    'paged' => $numpage,
    'category' => !empty($category) ? $category[0]->term_id : ''
]);

$next_posts = get_posts([
    'numberposts' => $numberposts,
    'paged' => $numpage + 1,
    'category' => !empty($category) ? $category[0]->term_id : ''
]);

?>
<main>
    <div class="block-section">
        <div class="container">
            <div class="row">
                <?php foreach ($posts as $post):
                    /**
                     * @var WP_Post $post
                     */
                    $thumbnail_url = get_the_post_thumbnail_url($post->ID);
                    $cat = '';
                    $cats = get_the_category($post->ID);
                    if (!empty($cats)) {
                        $cat = $cats[0]->name;
                    }

                    $permalink = get_permalink($post->ID);
                    ?>
                    <div class="col-md-6">
                        <div class="sc-post-block sc-post-block--list">
                            <div class="sc-post-block__image"><img src="<?= esc_url($thumbnail_url) ?>" alt=""></div>
                            <div class="sc-post-block__content">
                                <div class="sc-post-block__content__title">
                                    <a href="<?= esc_url($permalink) ?>">
                                        <?= $post->post_title ?>
                                    </a>
                                </div>
                                <div class="sc-post-block__content__info">
                                    <span><?= get_the_date(get_option('date_format'), $post->ID) ?></span>
                                    <span class="separate">|</span>
                                    <span><?= $cat ?></span></div>
                                <div class="sc-post-block__content__des">
                                    <?= $post->post_excerpt ?>...
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if (!empty($next_posts)): ?>
                <div class="sc-button center">
                    <a class="main-color" href="?numpage=<?= $numpage + 1 ?>">
                        <span><?= translate_i18n('Xem Thêm') ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php
get_footer();
