<?php 
$jobs = get_field('jobs', $page->ID, []);
?>
<main>
    <div class="container">
        <div class="panel-group sc-accordion sc-accordion--recruitment" id="accordion">
            <?php foreach($jobs as $idx => $job):
                $class_active = ($idx == 0) ? 'in' : '';
                ?>
            <div class="panel panel-default sc-accordion__item">
                <div class="panel-heading sc-accordion__heading">
                    <div class="panel-title"><a class="sc-accordion__heading__title" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?= $idx ?>" aria-expanded="true"><?= $job['field-title'] ?></a>
                        <div class="sc-accordion__heading__since"><?= $job['field-range-price'] ?></div>
                    </div>
                    <div class="sc-button sc-accordion__heading__button"><a class="main-color" href="#"><span><?= translate_i18n('Apply now') ?></span></a>
                    </div>
                </div>
                <div class="panel-collapse collapse <?= $class_active ?>" id="collapse-<?= $idx ?>">
                    <div class="panel-body sc-accordion__body">
                        <?= $job['field-desc'] ?>
                        <div class="sc-button"><a class="main-color" href="#"><span><?= translate_i18n('Apply now') ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
    </div>
</main>