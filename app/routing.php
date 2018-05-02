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

    'Connexion' => [ // Controller
        ['connexionForm', '/', ['POST', 'GET']], // action, url, method
        ['add', '/item/add', 'GET'], // action, url, method
        ['edit', '/item/edit/{id:\d+}', 'GET'], // action, url, method
        ['show', '/item/{id:\d+}', ['POST', 'GET']], // action, url, method

    'Quizz' => [ // Controller
        ['quizz', '/quizz', ['POST', 'GET']],
        ['editQuizz', '/editQuizz', ['POST', 'GET']],// action, url, method


    'Resultat' => [ // Controller
        ['resultat', '/resultat', ['GET', 'POST']], // action, url, method
    ],
    'Choice' => [ // Controller

        ['choice', '/choice', ['GET', 'POST']], // action, url, method
    ],

];
