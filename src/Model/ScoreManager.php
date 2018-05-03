<?php
/**
 * Created by PhpStorm.
 * Quizz: root
 * Date: 25/04/18
 * Time: 11:20
 * PHP version 7
 */
namespace Model;
/**
 *
 */
class ScoreManager extends AbstractManager
{
    const TABLE = 'score';
    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }


    public function insertScore ($idQuizz, $idUser, $score)
    {
        $date = date("Y-m-d");
        $_SESSION['inserted']=TRUE;
        $query = "INSERT INTO $this->table (idQuizz,idUser,score,scoreDate) VALUES (:idQuizz,:idUser,:score,:scoreDate)";
        $statement = $this->pdoConnection->prepare($query);
        $statement->bindParam(':idQuizz', $idQuizz, \PDO::PARAM_INT);
        $statement->bindParam(':idUser', $idUser, \PDO::PARAM_INT);
        $statement->bindParam(':score', $score, \PDO::PARAM_INT);
        $statement->bindParam(':scoreDate', $date, \PDO::PARAM_STR);
        $statement->execute();
    }
    public function averageScore ($idUser)
    {
         $query = "SELECT score FROM $this->table WHERE idUser=:idUser";
         $statement = $this->pdoConnection->prepare($query);
         $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindParam(':idUser', $idUser, \PDO::PARAM_INT);
        $statement->execute();
        $scores = $statement->fetchAll();
        $sumScores = 0;
        // echo "<pre>";
        // var_dump($scores);
        // echo "</pre>";
        foreach ($scores as $game => $score)
        {
            $getScore = $score->getScore();
            $sumScores += $getScore;
        }
        $average = $sumScores/count($scores);
        return $average;
    }
}
