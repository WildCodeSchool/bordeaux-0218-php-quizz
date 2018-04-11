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
    'User' => [ // Controller
        ['index', '/', 'GET'], // action, url, method
        ['add', '/user/add', 'GET'], // action, url, method
        ['edit', '/user/edit/{id:\d+}', 'GET'], // action, url, method
        ['show', '/user/{id:\d+}', 'GET'], // action, url, method
    ], 

    'User' => [
    	['index', '/quizzs', 'GET'], // action, url, method
        ['add', '/quizz/add', 'GET'], // action, url, method
        ['edit', '/quizz/edit/{id:\d+}', 'GET'], // action, url, method
        ['show', '/quizz/{id:\d+}', 'GET'], // action, url, method
    ],
];
