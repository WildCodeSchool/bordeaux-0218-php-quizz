<?php
/**
 * Created by PhpStorm.
 * Quizz: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\Quizz;
use Model\QuizzManager;
use Model\UserManager;

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
        $quizzs = $quizzManager->selectAll();

        return $this->twig->render('User/index.html.twig', ['quizzs' => $quizzs]);
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
        $quizzManager = new QuizzManager();
        $quizz = $quizzManager->selectOneById($id);

        return $this->twig->render('Quizz/show.html.twig', ['quizz' => $quizz]);
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
