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
 * Class ResultatController
 *
 */
class ResultatController extends AbstractController
{

    /**
     * Display quizz listing
     *
     * @return string
     */
    public function resultat()
    {
        var_dump($_POST);
        $score = 0;
        if (isset($_POST)){
            foreach ($_POST as $idQuestion => $isTrue) {
                if ($isTrue==1){
                    $score++;
                }
            }
        }
      return $this->twig->render('Quizz/resultat.html.twig', ['score' => $score]) ;
    }

}
