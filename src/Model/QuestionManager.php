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
class QuestionManager extends AbstractManager
{
    const TABLE = 'questions';


    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
        $this->className = __NAMESPACE__ . '\\' . 'Question';
    }

    public function selectQuestions ($id)
    {
        $query = "SELECT * FROM $this->table WHERE id_quizz = :id ";

        $statement = $this->pdoConnection->prepare($query);
        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }

    // public function selectAnswers ($quizz)
    // {
    //     $query = "SELECT * FROM $this->answers WHERE id = ':id'";

    //     $statement = $this->pdoConnection->prepare($query);
    // }




}
