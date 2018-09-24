<?php
// generate fields
$tab_types = array(
    ACFCS::fieldTab(['name' => 'tab-type', 'label' => 'Type']),
    ACFCS::getText(['name' => 'type-title', 'label' => 'Title']),
    ACFCS::getText(['name' => 'type-number', 'label' => 'Number show']),
);

$tab_technologies = array(
    ACFCS::fieldTab(['name' => 'tab-technology', 'label' => 'Technology']),
    ACFCS::getText(['name' => 'technology-title', 'label' => 'Title']),
    ACFCS::getAreaText(['name' => 'technology-description', 'label' => 'Description']),
    ACFCS::getRepeater([
        'name' => 'technology-items',
        'label' => 'Technologies',
        'sub_fields' => [
            ACFCS::getText(['name' => 'title', 'label' => 'Title']),
            ACFCS::getAreaText(['name' => 'description', 'label' => 'Description']),
            ACFCS::getImage(['name' => 'bg', 'label' => 'Background'])
        ]
    ])
);

$tab_flavors = array(
    ACFCS::fieldTab(['name' => 'tab-flavors', 'label' => 'Flavors']),
    ACFCS::getText(['name' => 'flavors-title', 'label' => 'Title']),
    ACFCS::getAreaText(['name' => 'flavors-description', 'label' => 'Description']),
    ACFCS::getRepeater([
        'name' => 'flavors-items',
        'label' => 'Flavors',
        'sub_fields' => [
            ACFCS::getText(['name' => 'title', 'label' => 'Title']),
            ACFCS::getAreaText(['name' => 'description', 'label' => 'Description']),
            ACFCS::getImage(['name' => 'bg', 'label' => 'Background'])
        ]
    ])
);

$flavors_fields = array_merge($tab_types, $tab_technologies, $tab_flavors);

$page = get_page_by_path('flavors');
if (!empty($page)) {
    acf_add_local_field_group(array (
        'key' => 'group_flavors',
        'title' => 'Flavors',
        'fields' => $flavors_fields,
        'location' => array (
            array (
                array (
                    'param' => 'page',
                    'operator' => '==',
                    'value' => $page->ID,
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
