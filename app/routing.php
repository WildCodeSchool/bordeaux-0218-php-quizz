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
    'Inscription' => [ // Controller
    ['formulaire', '/formulaire', ['GET', 'POST']], // action, url, method
=======
        ['formulaire', '/formulaire', ['GET', 'POST']], // action, url, method
    
    	['thanks', '/thanks', ['GET', 'POST']],
>>>>>>> 07612d193c2723e50dd28287c7e1bf1abddedceb
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

<<<<<<< HEAD
    'Quizz' => [ // Controller
    ['quizz', '/quizz', 'GET'], // action, url, method
=======
        ['home', '/home', ['GET', 'POST']], // action, url, method
>>>>>>> 07612d193c2723e50dd28287c7e1bf1abddedceb
    ],
    'Choice' => [ // Controller

        ['choice', '/choice', ['GET', 'POST']], // action, url, method
    ],

];
