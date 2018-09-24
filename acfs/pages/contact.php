<?php
// generate fields
$contact_fields = array(
    ACFCS::getText(['name' => 'title', 'label' => 'Title']),
    ACFCS::getText(['name' => 'mail', 'label' => 'Mail']),
    ACFCS::getText(['name' => 'fax', 'label' => 'Fax']),
    ACFCS::getText(['name' => 'phone', 'label' => 'Phone']),
    ACFCS::getMap(['name' => 'address-map', 'label' => 'Address map']),
);

$page = get_page_by_path('contact');
if (!empty($page)) {
    acf_add_local_field_group(array (
        'key' => 'group_contact',
        'title' => 'About',
        'fields' => $contact_fields,
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
