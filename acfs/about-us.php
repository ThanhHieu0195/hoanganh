<?php
// generate fields
$tab_banner = array(
    ACFCS::fieldTab(['name' => 'tab-banner', 'label' => 'Banner']),
    ACFCS::getText(['name' => 'banner-title', 'label' => 'Title']),
    ACFCS::getText(['name' => 'banner-subtitle', 'label' => 'Subtitle']),
    ACFCS::getAreaText(['name' => 'banner-description', 'label' => 'Description']),
    ACFCS::getText(['name' => 'banner-author', 'label' => 'Author']),
    ACFCS::getText(['name' => 'banner-pos', 'label' => 'Pos']),
    ACFCS::getImage(['name' => 'banner-bg', 'label' => 'Background']),
);

$tab_message = array(
    ACFCS::fieldTab(['name' => 'tab-message', 'label' => 'Message']),
    ACFCS::getText(['name' => 'message-title', 'label' => 'Title']),
    ACFCS::getAreaText(['name' => 'message-description', 'label' => 'Description']),
    ACFCS::getText(['name' => 'message-author', 'label' => 'Author']),
    ACFCS::getText(['name' => 'message-pos', 'label' => 'Pos']),
    ACFCS::getImage(['name' => 'message-bg', 'label' => 'Background']),
);

$tab_quote1 = array(
    ACFCS::fieldTab(['name' => 'tab-quote1', 'label' => 'Quote 1']),
    ACFCS::getText(['name' => 'quote1-title', 'label' => 'Title']),
    ACFCS::getAreaText(['name' => 'quote1-description', 'label' => 'Description']),
    ACFCS::getImage(['name' => 'quote1-bg', 'label' => 'Background']),
);

$tab_quote2 = array(
    ACFCS::fieldTab(['name' => 'tab-quote2', 'label' => 'Quote 2']),
    ACFCS::getText(['name' => 'quote2-title', 'label' => 'Title']),
    ACFCS::getAreaText(['name' => 'quote2-description', 'label' => 'Description']),
    ACFCS::getImage(['name' => 'quote2-bg', 'label' => 'Background']),
);


$tab_history = array(
    ACFCS::fieldTab(['name' => 'tab-history', 'label' => 'History']),
    ACFCS::getText(['name' => 'history-title', 'label' => 'Title']),
    ACFCS::getAreaText(['name' => 'history-description', 'label' => 'Description']),
    ACFCS::getImage(['name' => 'quote2-bg', 'label' => 'Background']),
    ACFCS::getRepeater(['name' => 'ls-history', 'layout' => 'block', 'label' => 'Content History', 'sub_fields' => [
        ACFCS::getText(['name' => 'title', 'label' => 'Title']),
        ACFCS::getText(['name' => 'timeline', 'label' => 'Timeline']),
        ACFCS::getImage(['name' => 'bg', 'label' => 'Background']),
        ACFCS::getRepeater(['name' => 'items', 'label' => 'Items', 'sub_fields' => [
            ACFCS::getText(['name' => 'title', 'label' => 'Title']),
            ACFCS::getAreaText(['name' => 'history-description', 'label' => 'Description']),
        ]]),
    ]]),
);

$about_fields = array_merge($tab_banner, $tab_message, $tab_quote1, $tab_quote2, $tab_history);

$page = get_page_by_path('about-us');
if (!empty($page)) {
    acf_add_local_field_group(array (
        'key' => 'group_about',
        'title' => 'About',
        'fields' => $about_fields,
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
