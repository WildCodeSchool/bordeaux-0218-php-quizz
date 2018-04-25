<?php
/**
 * Created by PhpStorm.
 * Quizz: root
 * Date: 25/04/18
 * Time: 11:11
 * PHP version 7
 */

namespace Controller;

use Model\Question;
use Model\Answer;
use Model\QuizzManager;
use Model\QuestionManager;
use Model\AnswerManager;


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
    public function quizz()
    {
        $questionManager = new QuestionManager();
        $answerManager = new AnswerManager();
        $questions = $questionManager->selectQuestions(1);
// TODO ATTENTION BOUCLER
        $answers = $answerManager->selectAnswers($questions[0]->getId());

        return $this->twig->render('Quizz/quizz.html.twig', ['questions' => $questions, 'answers' => $answers]);
    }

}
