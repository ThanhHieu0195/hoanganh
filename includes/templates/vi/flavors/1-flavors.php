<?php
$num = get_field('flavor-number', $page->ID, '-1');
$type_items = get_posts([
    'post_type' => 'flavor',
    'numberposts' => intval($num)
]);
?>
<div class="sc-product-layout-1">
    <div class="container">
        <div class="sc-main-title text-center"><?= get_field('flavor-title', $page->ID, '') ?></div>
        <?php
        if (!empty($type_items)):
        foreach ($type_items as $idx => $item) {
            $attr_str = "post_id='{$item->ID}' ";
            $style = ($idx % 2 + 1);
            $attr_str .= "style='{$style}' ";
            $sc = "[flavor ${attr_str}/]";
            echo do_shortcode($sc);
        }
        endif;
        ?>
    </div>
</div>