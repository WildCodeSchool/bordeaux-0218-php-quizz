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
<<<<<<< HEAD
    'user' => [ // Controller
        ['index', 'users/', 'GET'], // action, url, method
        ['add', '/user/add', 'GET'], // action, url, method
        ['edit', '/user/edit/{id:\d+}', 'GET'], // action, url, method
        ['show', '/user/{id:\d+}', 'GET'], // action, url, method

        /*['index', '/quizzs', 'GET'], // action, url, method
        ['add', '/quizz/add', 'GET'], // action, url, method
        ['edit', '/quizz/edit/{id:\d+}', 'GET'], // action, url, method
        ['show', '/quizz/{id:\d+}', 'GET'], // action, url, method

        ['index', '/quiestions', 'GET'], // action, url, method
        ['add', '/quiestion/add', 'GET'], // action, url, method
        ['edit', '/quiestion/edit/{id:\d+}', 'GET'], // action, url, method
        ['show', '/quiestion/{id:\d+}', 'GET'], // action, url, method

        ['index', '/answers', 'GET'], // action, url, method
        ['add', '/answer/add', 'GET'], // action, url, method
        ['edit', '/answer/edit/{id:\d+}', 'GET'], // action, url, method
        ['show', '/answer/{id:\d+}', 'GET'], // action, url, method

        ['index', '/scores', 'GET'], // action, url, method
        ['add', '/score/add', 'GET'], // action, url, method
        ['edit', '/score/edit/{id:\d+}', 'GET'], // action, url, method
        ['show', '/score/{id:\d+}', 'GET'], // action, url, method*/
=======
    'Inscription' => [ // Controller

        ['formulaire', '/formulaire', ['GET', 'POST']], // action, url, method
    ],
    'Profil' => [ // Controller
        ['profil', '/profil', 'GET'], // action, url, method
>>>>>>> origin/first_merge_inscription_manager
    ],

    'Home' => [ // Controller

        ['home', '/choucroute', ['GET', 'POST']], // action, url, method
    ],
];
