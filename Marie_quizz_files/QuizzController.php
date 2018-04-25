<?php
/**
 * Created by PhpStorm.
 * Quizz: root
 * Date: 25/04/18
 * Time: 11:11
 * PHP version 7
 */

namespace Controller;

use Model\Quizz;
use Model\QuizzManager;


/**
 * Class QuizzController
 *
 */
class QuizzController extends AbstractController
{

    /**
     * Display quizz listing
     *
     * @return string
     */
    public function index()
    {
        $quizzManager = new QuizzManager();
        $quizzList = $quizzManager->selectAll();
        $userManager = new UserManager();
        $users = $userManager->selectAll();

        return $this->twig->render('User/index.html.twig', ['quizzList' => $quizzList, 'users' => $users, 'answers' => $answers, 'questions' => $questions]);
    }

    /**
     * Display quizz informations specified by $id
     *
     * @param  int $id
     *
     * @return string
     */
    public function show(int $id)
    {

        return $this->twig->render('User/show.html.twig', ['questions' => $questions]);
    }

    /**
     * Display quizz edition page specified by $id
     *
     * @param  int $id
     *
     * @return string
     */
    public function edit(int $id)
    {
        // TODO : edit quizz with id $id
        return $this->twig->render('Quizz/edit.html.twig', ['quizz', $id]);
    }

    /**
     * Display quizz creation page
     *
     * @return string
     */
    public function add()
    {
        // TODO : add a new quizz
        return $this->twig->render('Quizz/add.html.twig');
    }

    /**
     * Display quizz delete page
     *
     * @param  int $id
     *
     * @return string
     */
    public function delete(int $id)
    {
        // TODO : delete the quizz with id $id
        return $this->twig->render('Quizz/index.html.twig');
    }
}
