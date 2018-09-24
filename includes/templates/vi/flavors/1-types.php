<?php
$num = get_field('type-number', $page->ID, '-1');
$type_items = get_posts([
    'post_type' => 'flavor',
    'numberposts' => intval($num)
]);

?>
<div class="sc-product-layout-1">
    <div class="container">
        <div class="sc-main-title text-center"><?= get_field('type-title', $page->ID, '') ?></div>
        <?php
        foreach ($type_items as $idx => $item) {
            $attr_str = "post_id='{$item->ID}' ";
            $style = ($idx % 2 + 1);
            $attr_str .= "style='{$style}' ";
            $sc = "[flavor-type ${attr_str}/]";
            echo do_shortcode($sc);
        }
        ?>
    </div>
</div>