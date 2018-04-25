<?php
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 23/10/17
 * Time: 10:57
 * PHP version 7
 */

namespace Model;

/**
 * Class Question
 *
 */
class Question
{
    private $id;

    private $questionName;

    private $id_quizz;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return Question
     */
    public function setId($id): Question
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestionName(): string
    {
        return $this->questionName;
    }

    /**
     * @param mixed $title
     *
     * @return Question
     */
    public function setQuestionName($questionName):Question
    {
        $this->questionName = $questionName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdQuizz(): string
    {
        return $this->id_quizz;
    }

    /**
     * @param mixed $title
     *
     * @return Question
     */
    public function setIsTrue($id_quizz):Question
    {
        $this->id_quizz = $id_quizz;

        return $this;
    }

}
