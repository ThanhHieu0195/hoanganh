<?php
// generate fields
$recruitment_fields = array(
    ACFCS::getRepeater(['name' => 'jobs', 'label' => 'Jobs', 
        'sub_fields' => [
            ACFCS::getText(['name' => 'title', 'label' => 'Title']),
            ACFCS::getText(['name' => 'range-price', 'label' => 'Range Price']),
            ACFCS::getAreaText(['name' => 'desc', 'label' => 'Description']),
        ]
    ]),
);

$page = get_page_by_path('recruitment');
if (!empty($page)) {
    acf_add_local_field_group(array (
        'key' => 'group_recruitment',
        'title' => 'Recruitment',
        'fields' => $recruitment_fields,
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
