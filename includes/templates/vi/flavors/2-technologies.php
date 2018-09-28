<?php
$items = get_field('technology-items', $page->ID, []);
?>
<div class="sc-technology-layout-1 parllax-common">
    <div class="container">
        <div class="row">
            <div class="sc-main-title text-center"><?= get_field('technology-title') ?></div>
            <div class="sc-subtitle">
                <?= get_field('technology-description') ?>
            </div>
            <?php foreach ($items as $idx => $item):
                // generate sc
                $str_attrs = '';
                $str_attrs .= "title='{$item['field-title']}' ";
                $str_attrs .= "description='{$item['field-description']}' ";
                $bg = wp_get_attachment_image_url($item['field-bg'], 'full');
                $str_attrs .= "bg='{$bg}' ";
                $sc = "[flavor-technology {$str_attrs}/]";
                $arr = [3, 4];
                $class_sc = 'col-xs-12 col-sm-12 col-md-4';
                if ( in_array($idx, $arr) ) {
                    $arr[array_search($idx, $arr)] += $arr[1];
                    $class_sc = 'col-xs-12 col-sm-12 col-md-6';
                }
                ?>
            <div class="<?= $class_sc ?>">
                <?= do_shortcode($sc) ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>