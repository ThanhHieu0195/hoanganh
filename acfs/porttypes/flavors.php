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

$flavor_fields = array_merge($tab_items, $tab_applications, $tab_products);

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
