<?php
/**
 * Created by PhpStorm.
 * Question: wcs
 * Date: 23/10/17
 * Time: 10:57
 * PHP version 7
 */

namespace Model;

/**
 * Class Question
 *
 */
class Questions
{
    private $id;

    private $question;

    private $idQuizz;

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
     * @return Questions
     */
    public function setId($id): Question
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @param mixed $title
     *
     * @return Question
     */
    public function setQuestion($question):Question
    {
        $this->question = $question;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdQuizz(): string
    {
        return $this->idQuizz;
    }

    /**
     * @param mixed $title
     *
     * @return Question
     */
    public function setIdQuizz($idquizz):Question
    {
        $this->idQuizz = $idQuizz;

        return $this;
    }
}
