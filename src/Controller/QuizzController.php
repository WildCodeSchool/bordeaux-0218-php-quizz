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
use Model\Quizz;
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

        if (isset($_POST['chosenQuizz']))
        {
            $_SESSION ['chosenQuizz']=$_POST['chosenQuizz'];
            

            $questionManager = new QuestionManager();
            $answerManager = new AnswerManager();
            $questions = $questionManager->selectQuestions($_SESSION ['chosenQuizz']);
            for ($i=0; $i<10; $i++)
            {
            $answers [] = $answerManager->selectAnswers($questions[$i]->getId());
            }
            return $this->twig->render('Quizz/quizz.html.twig', ['questions' => $questions, 'answers' => $answers, 'connected' => $_SESSION['connected']]);
        }

        else
        {
            header('Location: /choice');
        }
    }


    public function editQuizz()
    {

        if (isset($_SESSION['connected']) && $_SESSION['connected'] === TRUE)
        {
            $quizz = new QuizzManager();
            $allThemes = $quizz->allThemes();


            $quizzToInsert = [];
            $questionToInsert = [];
            $answerToInsert = [];

            if (isset($_POST) && count($_POST) === 53)
            {
                foreach ($_POST as $key => $value) 
                {
                   if (trim($value) != '')
                   {
                        if ($key === 'chosenTheme')
                        {
                            $quizzToInsert['theme']=$value;
                        }

                        else if ($key === 'quizzName')
                        {
                            $quizzToInsert['quizzName']=$value;
                        }

                        else if (is_numeric($key))
                        {
                            $questionToInsert[$key]=$value;
                        }

                        else if (preg_match('/[0-9]{1,2}[A-Z]/', $key))
                        {
                            $questionId = preg_split('/[A-Z]/', $key);
                            $answerId = preg_split('/[0-9]{1,2}/', $key);
                            $answerToInsert[$questionId[0]][$answerId[1]]=$value;
                        }
                   } 
                   else
                   {
                    header('Location: /editQuizz');
                   }
                }

                $question = new QuestionManager();
                $answer = new AnswerManager();

                $quizzId = $quizz->insertQuizz($quizzToInsert['quizzName'], $quizzToInsert['theme']);

                for ($i=1; $i<=count($questionToInsert); $i++)
                {
                    $questionId = $question->insertQuestion($questionToInsert[$i], $quizzId);
                    foreach ($answerToInsert[$i] as $key => $value) 
                    {
                        $answer->insertAnswer($value, 0, $questionId);
                    }
                    
                }

            }

            return $this->twig->render('Quizz/editQuizz.html.twig',['themes'=>$allThemes, 'connected' => $_SESSION['connected']]);
        }

        else
        {
            return $this->twig->render('Home/home.html.twig');
        }

    }


}
























