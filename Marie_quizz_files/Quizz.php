<?php
/**
 * Created by PhpStorm.
 * Quizz: root
 * Date: 25/04/18
 * Time: 11:40
 * PHP version 7
 */

namespace Model;

/**
 * Class Quizz
 *
 */
class Quizz
{
    private $id;

    private $quizzName;

    private $theme;

    private $idUsers;

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
     * @return quizzList
     */
    public function setId($id): Quizz
    {
        $this->id = $id;

        return $this;
    }


    /**
     * @return int
     */
    public function getQuizzName(): int
    {
        return $this->quizzName;
    }

    /**
     * @param mixed $id
     *
     * @return quizzList
     */
    public function setQuizzName($quizzName): Quizz
    {
        $this->id = $quizzName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTheme(): string
    {
        return $this->theme;
    }

    /**
     * @param mixed $title
     *
     * @return Quizz
     */
    public function setTheme($theme):Quizz
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdUsers(): int
    {
        return $this->idUsers;
    }

    /**
     * @param mixed $title
     *
     * @return Quizz
     */
    public function setIdUsers($idUsers):Quizz
    {
        $this->idUsers = $idUsers;

        return $this;
    }
}
