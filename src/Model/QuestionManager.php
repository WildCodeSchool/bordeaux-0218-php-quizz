<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
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
    }

    public function selectQuizzQuestions($id):array
    {
        $statement = $this->pdoConnection->prepare("SELECT * FROM $this->table WHERE id_quizz = :id");
        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();


        return $statement->fetchAll();
    }
}

