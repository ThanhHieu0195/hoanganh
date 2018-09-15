<?php
namespace includes\classes;

Class Constants {
	const TYPE_ONEPAGE = 'onepage';
	const MAX_PROJECT = 8;
	const MAX_POST = 9;
	const HOME_SESSIONS = array(1, 2, 3, 4, 5, 6);

	const DEFAULT_SLUG = 'hoanganh/';
	// const DEFAULT_SLUG = '~simplet1/hoanganh/';

    const MAPP_TEMPLATE = [
        self::DEFAULT_SLUG  => 'home',
        self::DEFAULT_SLUG  . 'about-us/' => 'about-us',
        self::DEFAULT_SLUG  . 'flavors/' => 'flavors',
        self::DEFAULT_SLUG  . 'research/' => 'research',
        self::DEFAULT_SLUG  . 'insight/' => 'insight',
        // self::DEFAULT_SLUG . 'en/' => 'home',
    ];
}