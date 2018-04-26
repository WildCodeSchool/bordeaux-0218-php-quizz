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

    'Inscription' => [ // Controller
    ['formulaire', '/formulaire', ['GET', 'POST']], // action, url, method
    ],

    'Profil' => [ // Controller
    ['profil', '/profil', 'GET'], // action, url, method
    ],

    'EditProfil' => [ // Controller
    ['editProfil', '/editProfil', ['GET', 'POST']], // action, url, method
    ],

    'Home' => [ // Controller
    ['home', '/', ['GET', 'POST']], // action, url, method
    ],

    'Quizz' => [ // Controller
    ['quizz', '/quizz', 'GET'], // action, url, method
    ],
];
