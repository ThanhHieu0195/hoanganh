
<?php 
$list_history = get_field('ls-history', $page->ID, []);
?>
<div class="container">
    <div class="block-section">
        <div class="sc-main-title">
            <?= get_field('history-title', $page->ID, '') ?>
        </div>
        <div class="sc_description">
            <?= get_field('history-description', $page->ID, '') ?>
        </div>
        <div class="panel-group sc-accordion" id="accordion">
            <?php foreach ($list_history as $idx => $history): ?>
            <div class="panel panel-default sc-accordion__item">
                <div class="panel-heading sc-accordion__heading">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-equal">
                            <div class="sc-accordion__heading__image"><img src="<?= $path_template_url ?>/assets/images/about-us/lichsu01.png" alt=""></div>
                        </div>
                        <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-equal">
                            <div class="panel-title">
                                <div class="content-left">
                                    <div class="sc-accordion__heading__title"><?= $history['field-title'] ?></div>
                                    <div class="sc-accordion__heading__since"><?= $history['field-timeline'] ?></div>
                                </div><a class="sc-accordion__arrow" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?= $idx ?>" <?= $idx == 0 ? 'aria-expanded="true"' : '' ?>><i class="fas fa-angle-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-collapse collapse <?= $idx == 0 ? 'in' : '' ?>" id="collapse-<?= $idx ?>">
                    <div class="panel-body sc-accordion__body">
                        <?php if (!empty($history['field-items'])): ?>
                        <?php foreach ($history['field-items'] as $item): ?>
                        <div class="row sc-accordion__body__item">
                            <div class="col-md-1 col-md-offset-1 col-sm-1">
                                <div class="sc-accordion__body__year"><?= $item['field-title'] ?></div>
                            </div>
                            <div class="col-md-8 col-sm-10">
                                <div class="sc-accordion__body__history"><?= $item['field-history-description'] ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- end -->
        </div>
    </div>
</div>
