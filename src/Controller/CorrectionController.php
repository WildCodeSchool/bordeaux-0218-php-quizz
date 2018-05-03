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
      return $this->twig->render('Quizz/correction.html.twig', ['questions' => $questions, 'answers' => $answers]);
    }
    else
    {
      header('Location: /choice');
    }
  }
}
