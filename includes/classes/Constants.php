<?php
namespace includes\classes;

Class Constants {
	const TYPE_ONEPAGE = 'onepage';
	const MAX_PROJECT = 8;
	const MAX_POST = 9;
	const HOME_SESSIONS = array(1, 2, 3, 4, 5, 6);
	const MAPP_TEMPLATE = [
	    '' => 'home',
	    'vi/' => 'home',
	    'blogs' => 'blogs',
	    'vi/blogs' => 'blogs',

        //
        'wordpress/' => 'home',
        'wordpress/vi/' => 'home',
        'wordpress/blogs' => 'blogs',
        'wordpress/blogs/' => 'blogs',
        'wordpress/vi/blogs' => 'blogs',
    ];
}