<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, method
        ['add', '/add', 'GET'], // action, url, method
        ['edit', '/edit/{id:\d+}', 'GET'], // action, url, method
        ['show', '/{id:\d+}', 'GET'], // action, url, method
    ],
];
