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
class AnswerManager extends AbstractManager
{
    const TABLE = 'answers';


    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
        $this->className = __NAMESPACE__ . '\\' . 'Answer';
    }

    public function selectAnswers ($id)
    {
        $query = "SELECT * FROM $this->table WHERE id_questions = :id ";

        $statement = $this->pdoConnection->prepare($query);
        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }
}
