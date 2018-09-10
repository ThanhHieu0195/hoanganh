<?php
$counters = get_field('counters', $page->ID, []);
$title = get_field('counterstitle', $page->ID, '');
if (!empty($counters)):
?>
<div class="sc-counter">
    <div class="container">
        <div class="row">
            <div class="title"><?= $title ?></div>
            <?php foreach ($counters as $counter):
                $num = $counter['field_counternum'];
                $des = $counter['field_counterdescription'];
            ?>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="item-counter">
                    <div class="count">
                        <?= $num ?>+
                    </div>
                    <span><?= $des ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>