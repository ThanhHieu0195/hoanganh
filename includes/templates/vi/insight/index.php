<?php
$numpage = isset($_GET['numpage']) ? intval($_GET['numpage']) : 1;
$numberposts = get_field('numberposts', $page->ID, 10);

$cats = get_categories();
$cats_filter = [];
$posts = [];

$tab_all = translate_i18n('Tất cả');
$cats_filter[] = "<li class=\"active sc-tabs__nav-tabs__item\"><a class=\"sc-tabs__nav-tabs__link\" data-toggle=\"tab\" href=\"#term-all\">{$tab_all}</a></li>";
$arr['all'] = [];

$is_next = false;

foreach ($cats as $idx => $cat) {
    /**
     * @var $cat WP_Term
     */
    $cats_filter[] = "<li class=\"sc-tabs__nav-tabs__item\"><a class=\"sc-tabs__nav-tabs__link\" data-toggle=\"tab\" href=\"#term-{$cat->term_id}\">{$cat->name}</a></li>";
    $arr[$cat->term_id] = get_posts([
        'numberposts' => $numberposts * $numpage,
        'category' => [$cat->term_id],
        'meta_query' => array(
              array(
                    'relation' => 'OR',
                   array(
                        'key' => 'company_new',
                      'compare' => 'NOT EXISTS',
                    ),
                     array(
                        'key' => 'company_new',
                        'value' => '',
                      'compare' => '=',
                    )
           )
       )
    ]);

    $next_posts = get_posts([
        'numberposts' => $numberposts * ($numpage + 1),
        'category' => [$cat->term_id],
        'meta_query' => array(
              array(
                    'relation' => 'OR',
                   array(
                        'key' => 'company_new',
                      'compare' => 'NOT EXISTS',
                    ),
                     array(
                        'key' => 'company_new',
                        'value' => '',
                      'compare' => '=',
                    )
           )
       )
    ]);

    if (count($next_posts) > count($arr[$cat->term_id])) {
        $is_next = true;
    }

    $arr['all'] = array_merge($arr['all'], $arr[$cat->term_id]);
}
?>
<div class="block-content">
    <div class="container">
        <div class="sc-tabs">
            <ul class="sc-tabs__nav-tabs">
                <?=implode( '', $cats_filter) ?>
            </ul>
            <div class="tab-content sc-tabs__tab-content">
                <?php foreach ($arr as $slug => $items):
                    $class_active = $slug == 'all' ? 'in active' : '';
                    if (!empty($items)):
                        $cat = get_cat_name($slug);
                        if (empty($cat)) {
                            $cats = get_the_category($items[0]->ID);
                            $cat = !empty($cats) ? $cats[0]->name : '';
                        }
                    ?>
                <div class="tab-pane fade <?= $class_active ?>" id="term-<?= $slug ?>">
                    <div class="sc-post-block sc-post-block__main">
                        <div class="sc-post-block__image"><img src="<?= get_the_post_thumbnail_url($items[0]->ID) ?>" alt="">
                        </div>
                        <div class="sc-post-block__content">
                            <div class="sc-post-block__content__title">
                                <a href="<?= esc_url($permalink) ?>">
                                    <?= $items[0]->post_title ?>
                                </a>
                            </div>
                            <div class="sc-post-block__content__info">
                                <span><?= get_the_date(get_option('date_format'), $items[0]->ID) ?></span>
                                <span class="separate">|</span>
                                <span><?= $cat ?></span>
                            </div>
                            <div class="sc-post-block__content__des">
                                <?= $items[0]->post_excerpt ?>...
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php for($i=1; $i<count($items); $i++):
                        $item = $items[$i];
                        $permalink = get_permalink($item->ID);
                        ?>
                        <div class="col-md-6">
                            <div class="sc-post-block">
                                <div class="sc-post-block__image">
                                    <img src="<?= get_the_post_thumbnail_url($item->ID) ?>" alt="">
                                </div>
                                <div class="sc-post-block__content">
                                    <div class="sc-post-block__content__title">
                                        <a href="<?= esc_url($permalink) ?>"><?= $item->post_title ?></a>
                                    </div>
                                    <div class="sc-post-block__content__info">
                                        <span><?= get_the_date(get_option('date_format'), $item->ID) ?></span>
                                        <span class="separate">|</span>
                                        <span><?= $cat ?></span>
                                    </div>
                                    <div class="sc-post-block__content__des">
                                        <?= $item->post_excerpt ?>...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                 </div>
                <?php
                endif;
                endforeach; ?>
            </div>
            <?php if ($is_next): ?>
            <div class="sc-button">
                <a class="main-color" href="?numpage=<?= $numpage + 1 ?>">
                    <span><?= translate_i18n('Xem Thêm') ?></span>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
