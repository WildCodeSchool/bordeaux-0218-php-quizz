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
class QuizzManager extends AbstractManager
{
    const TABLE = 'quizz';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function selectQuestions ($quizz)
    {
        $query = "SELECT * FROM $this->questions WHERE id_quizz = ':id'";

        $statement = $this->pdoConnection->prepare($query);

    public function selectAnswers ($quizz)
    {
        $query = "SELECT * FROM $this->answers WHERE id = ':id'";

        $statement = $this->pdoConnection->prepare($query);




}
