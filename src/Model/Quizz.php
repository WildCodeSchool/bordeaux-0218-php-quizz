<?php
/**
 * Created by PhpStorm.
 * Quizz: wcs
 * Date: 23/10/17
 * Time: 10:57
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
     * @return Quizzs
     */
    public function setId($id): Quizz
    {
        $this->id = $id;

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
