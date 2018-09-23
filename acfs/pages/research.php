<?php
// generate fields
$tab_info = array(
    ACFCS::fieldTab(['name' => 'tab-info', 'label' => 'Information']),
    ACFCS::getText(['name' => 'info-title', 'label' => 'Title']),
    ACFCS::getAreaText(['name' => 'info-description', 'label' => 'Description']),
    ACFCS::getImage(['name' => 'info-bg', 'label' => 'Background']),
    ACFCS::getUrl(['name' => 'info-url', 'label' => 'Link'])
);

$tab_inv= array(
    ACFCS::fieldTab(['name' => 'tab-inv', 'label' => 'Inovation']),
    ACFCS::getText(['name' => 'inv-title', 'label' => 'Title']),
    ACFCS::getRepeater([
        'name' => 'inv-items',
        'label' => 'Items',
        'sub_fields' => [
            ACFCS::getText(['name' => 'item', 'label' => 'item']),
            ACFCS::getImage(['name' => 'bg', 'label' => 'Background']),
        ]
    ])
);

$tab_rd = array(
    ACFCS::fieldTab(['name' => 'tab-rd', 'label' => 'R&D']),
    ACFCS::getText(['name' => 'rd-title', 'label' => 'Title']),
    ACFCS::getRepeater([
        'name' => 'rd-items',
        'label' => 'Items',
        'sub_fields' => [
            ACFCS::getText(['name' => 'title', 'label' => 'title']),
            ACFCS::getUrl(['name' => 'url', 'label' => 'Url']),
            ACFCS::getImage(['name' => 'bg', 'label' => 'Background']),
        ]
    ])
);


$research_fields = array_merge($tab_info, $tab_inv, $tab_rd);

$page = get_page_by_path('research');
if (!empty($page)) {
    acf_add_local_field_group(array (
        'key' => 'group_research',
        'title' => 'Research',
        'fields' => $research_fields,
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
