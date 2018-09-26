<?php
// generate fields
$tab_information = array(
    ACFCS::fieldTab(['name' => 'tab-information', 'label' => 'Information']),
    ACFCS::getText(['name' => 'i-title', 'label' => 'Title']),
    ACFCS::getAreaText(['name' => 'i-desc', 'label' => 'Description']),

    ACFCS::getText(['name' => 'i-app-title', 'label' => 'Application Title']),
    ACFCS::getAreaText(['name' => 'i-app-desc', 'label' => 'Application description']),
    ACFCS::getImage(['name' => 'i-bg', 'label' => 'Background']),
);

$tab_items = array(
    ACFCS::fieldTab(['name' => 'tab-glavor', 'label' => 'Groups']),
    ACFCS::getText(['name' => 'gf-titl  e', 'label' => 'Title']),
    ACFCS::getRepeater(['name' => 'gf-items', 'label' => 'Items', 'sub_fields' => [
        ACFCS::getText(['name' => 'title', 'label' => 'Title']),
        ACFCS::getAreaText(['name' => 'concept', 'label' => 'Concept']),
        ACFCS::getImage(['name' => 'bg', 'label' => 'Background']),
    ]]),
);


$ingredient_fields = array_merge($tab_information, $tab_items);

if (!empty($page)) {
    acf_add_local_field_group(array (
        'key' => 'group_ingredient',
        'title' => 'Ingredient',
        'fields' => $ingredient_fields,
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'ingredient',
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
