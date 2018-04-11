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
 * Class User
 *
 */
class Users
{
    private $id;

    private $firstName;

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
     * @return Users
     */
    public function setId($id): User
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param mixed $title
     *
     * @return User
     */
    public function setFirstName($firstName):User
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param mixed $title
     *
     * @return User
     */
    public function setLastName($lastName):User
    {
        $this->lastName = $lastName;

        return $this;
    }
}
