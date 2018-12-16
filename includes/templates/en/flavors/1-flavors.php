<?php
$type_items = get_field('flavor-items', $page->ID, []);
?>
<div class="sc-product-layout-1">
    <div class="container">
        <div class="sc-main-title text-center"><?= get_field('flavor-title', $page->ID, '') ?></div>
        <?php
        if (!empty($type_items)):
        foreach ($type_items as $idx => $id) {
            $item = get_post($id);
            $attr_str = "post_id='{$item->ID}' ";
            $style = ($idx % 2 + 1);
            $attr_str .= "style='{$style}' ";
            $sc = "[flavor ${attr_str}/]";
            echo do_shortcode($sc);
        }
        endif;
        ?>
        <div class="readmore">Read More </div>
    </div>
</div>