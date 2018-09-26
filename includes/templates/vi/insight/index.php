<?php
$cats = get_categories();
$cats_filter = [];
$posts = [];

$tab_all = translate_i18n('Tất cả');
$cats_filter[] = "<li class=\"active sc-tabs__nav-tabs__item\"><a class=\"sc-tabs__nav-tabs__link\" data-toggle=\"tab\" href=\"#term-all\">{$tab_all}</a></li>";
$arr['all'] = [];

foreach ($cats as $idx => $cat) {
    /**
     * @var $cat WP_Term
     */
    $cats_filter[] = "<li class=\"sc-tabs__nav-tabs__item\"><a class=\"sc-tabs__nav-tabs__link\" data-toggle=\"tab\" href=\"#term-{$cat->term_id}\">{$cat->name}</a></li>";
    $arr[$cat->term_id] = get_posts([
        'numberposts' => 10,
        'category' => [$cat->term_id]
    ]);
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
                            <div class="sc-post-block__content__title"><?= $items[0]->post_title ?></div>
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
                        ?>
                        <div class="col-md-6">
                            <div class="sc-post-block">
                                <div class="sc-post-block__image"><img src="<?= get_the_post_thumbnail_url($item->ID) ?>" alt="">
                                </div>
                                <div class="sc-post-block__content">
                                    <div class="sc-post-block__content__title"><?= $item->post_title ?></div>
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
        </div>
    </div>
</div>