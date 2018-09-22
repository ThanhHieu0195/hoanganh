<?php
$type_items = get_field('type-items', $page->ID, []);
?>
<div class="sc-product-layout-1">
    <div class="container">
        <div class="sc-main-title text-center"><?= get_field('type-title', $page->ID, '') ?></div>
        <?php
        foreach ($type_items as $item) {
            $attr_str = "title='{$item['field-title']}' ";
            $attr_str .= "description='{$item['field-description']}' ";
            $bg = wp_get_attachment_image_url($item['field-bg'], 'full');
            $attr_str .= " bg='{$bg}' ";
            $concepts = $item['field-concepts'];

            for ($i=0; $i<count($concepts); $i++) {
                $attr_str .= "concept_{$i}_item='{$concepts[$i]['field-concept']}' ";
            }
            $attr_str .= "style='{$item['field-type']}' ";
            $sc = "[flavor-type ${attr_str}/]";
            echo do_shortcode($sc);
        }
        ?>
    </div>
</div>