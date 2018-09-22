<?php
// generate fields
$tab_types = array(
    ACFCS::fieldTab(['name' => 'tab-type', 'label' => 'Type']),
    ACFCS::getText(['name' => 'type-title', 'label' => 'Title']),
    ACFCS::getRepeater([
        'name' => 'type-items',
        'label' => 'Types',
        'layout' => 'block',
        'sub_fields' => [
            ACFCS::getText(['name' => 'title', 'label' => 'Title']),
            ACFCS::getAreaText(['name' => 'description', 'label' => 'Description']),
            ACFCS::getRepeater([
                'name' => 'concepts',
                'label' => 'Concepts',
                'sub_fields' => [
                    ACFCS::getText(['name' => 'concept', 'label' => 'Concept']),
                ]
            ]),
            ACFCS::getImage(['name' => 'bg', 'label' => 'Background']),
            ACFCS::getSelect(['name' => 'type', 'label' => 'type', 'choices' => ['1' => 'type 1', '2' => 'type 2'], 'default_value' => '1'])
        ]
    ]),
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
