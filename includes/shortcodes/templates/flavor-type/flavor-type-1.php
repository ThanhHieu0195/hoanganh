<?php
extract($params);
?>
<div class="block-item left">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="block-image"><a href="#"><img src="<?= esc_url($bg) ?>"></a></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="block-content">
                <div class="title"><?= esc_html($title) ?></div>
                <div class="description">
                    <?= esc_html($description) ?>
                    <?php if(!empty($concepts)): ?>
                        <ul>
                            <li><?= implode('</li><li>', $concepts) ?> </li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

