<?php
// generate fields
$posts_fields = [
    ACFCS::getText(['name' => 'numberposts', 'label' => 'Number Posts']),
];

$page = get_page_by_path('insight');
if (!empty($page)) {
    acf_add_local_field_group(array (
        'key' => 'group_insight',
        'title' => 'Post insight',
        'fields' => $posts_fields,
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
