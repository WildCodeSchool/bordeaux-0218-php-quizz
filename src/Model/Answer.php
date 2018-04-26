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
 * Class Answer
 *
 */
class Answer
{
    private $id;

    private $name;

    private $istrue;

    private $idQuestions;

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
     * @return Answer
     */
    public function setId($id): Answer
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed $title
     *
     * @return Answer
     */
    public function setName($name):Answer
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsTrue(): string
    {
        return $this->istrue;
    }

    /**
     * @param mixed $title
     *
     * @return Answer
     */
    public function setIsTrue($istrue):Answer
    {
        $this->istrue = $istrue;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdQuestions(): string
    {
        return $this->idQuestions;
    }

    /**
     * @param mixed $title
     *
     * @return Answer
     */
    public function setIdQuestions($idQuestions):Answer
    {
        $this->idQuestions = $idQuestions;

        return $this;
    }
}
