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
    
    	['thanks', '/thanks', ['GET', 'POST']],
    ],
    'Profil' => [ // Controller
        ['profil', '/profil', 'GET'], // action, url, method
    ],

    'Home' => [ // Controller

        ['home', '/home', ['GET', 'POST']], // action, url, method
    ],
    'Choice' => [ // Controller

        ['choice', '/choice', ['GET', 'POST']], // action, url, method
    ],

];
