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
    'Quizz' => [ // Controller
        ['quizz', '/quizz', ['POST', 'GET']], 
        ['editQuizz', '/editQuizz', ['POST', 'GET']],// action, url, method
        ['none', '/cassoulet', ['POST', 'GET']],
        
    ],
    'Resultat' => [ // Controller
        ['resultat', '/resultat', ['GET', 'POST']], // action, url, method
    ],
    'Choice' => [ // Controller

        ['choice', '/choice', ['GET', 'POST']], // action, url, method
    ],

];
