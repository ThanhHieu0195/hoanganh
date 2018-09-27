<?php
// generate fields
$tab_items = array(
    ACFCS::fieldTab(['name' => 'tab-glavor', 'label' => 'Groups Flavor']),
    ACFCS::getText(['name' => 'gf-title', 'label' => 'Title']),
    ACFCS::getRepeater(['name' => 'gf-items', 'label' => 'Items', 'sub_fields' => [
        ACFCS::getText(['name' => 'title', 'label' => 'Title']),
        ACFCS::getAreaText(['name' => 'concept', 'label' => 'Concept']),
        ACFCS::getImage(['name' => 'bg', 'label' => 'Background']),
    ]]),
);

$tab_applications = array(
    ACFCS::fieldTab(['name' => 'tab-app', 'label' => 'Applications']),
    ACFCS::getText(['name' => 'app-title', 'label' => 'Title']),
    ACFCS::getText(['name' => 'app-concept', 'label' => 'Concept']),
    ACFCS::getRepeater(['name' => 'app-items', 'label' => 'Items', 'sub_fields' => [
        ACFCS::getText(['name' => 'title', 'label' => 'Title']),
        ACFCS::getText(['name' => 'description', 'label' => 'description']),
        ACFCS::getImage(['name' => 'bg', 'label' => 'Background']),
    ]]),
);

$tab_products = array(
    ACFCS::fieldTab(['name' => 'tab-products', 'label' => 'Products']),
    ACFCS::getText(['name' => 'p-title', 'label' => 'Title']),
    ACFCS::getText(['name' => 'p-concept', 'label' => 'Concept']),
    ACFCS::getRepeater(['name' => 'p-items', 'label' => 'Items', 'sub_fields' => [
        ACFCS::getText(['name' => 'title', 'label' => 'Title']),
        ACFCS::getText(['name' => 'description', 'label' => 'description']),
        ACFCS::getImage(['name' => 'bg', 'label' => 'Background']),
    ]]),
);

$tab_background = array(
    ACFCS::fieldTab(['name' => 'tab-image-background', 'label' => 'Image Background']),
    ACFCS::getImage(['name' => 'top-left', 'label' => 'top-left']),
    ACFCS::getImage(['name' => 'middle-left', 'label' => 'middle-left']),
    ACFCS::getImage(['name' => 'bottom-left', 'label' => 'bottom-left']),
    ACFCS::getImage(['name' => 'bottom-left-left', 'label' => 'bottom-left-left']),

    ACFCS::getImage(['name' => 'top-right', 'label' => 'top-right']),
    ACFCS::getImage(['name' => 'middle-right', 'label' => 'middle-right']),
    ACFCS::getImage(['name' => 'middle-right-right', 'label' => 'middle-right-right']),
    ACFCS::getImage(['name' => 'bottom-right', 'label' => 'bottom-right']),
    ACFCS::getImage(['name' => 'bottom-right-right', 'label' => 'bottom-right-right']),
);

$flavor_fields = array_merge($tab_items, $tab_applications, $tab_products, $tab_background);

if (!empty($page)) {
    acf_add_local_field_group(array (
        'key' => 'group_pt_video',
        'title' => 'Flavor',
        'fields' => $flavor_fields,
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'flavor',
                ),
            )
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array (
            0 => 'the_content',
        ),
        'active' => 1,
        'description' => '',
    ));
}
