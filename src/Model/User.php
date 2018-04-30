<?php


namespace Model;

/**
 * Class User
 *
 */

class User
{
    private $id;

    private $firstName;

    private $lastName;

    //private $address;

    private $mail;

    private $password;


// Get & Setter pour l'id :
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


// Get & Setter pour firstName :
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

// Get & Setter pour lastName :
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

// Get & Setter pour l'email :
/**
 * @return mixed
 */
public function getMail(): string
  {
    return $this->mail;
  }

/**
 * @param mixed $title
 *
 * @return User
 */
public function setMail($mail):User
  {
    $this->mail = $mail;

    return $this;
  }
}

// Get & Setter pour le mot de passe :
/**
 * @return mixed
 */
public function getPassword(): string
  {
    return $this->password;
  }

/**
 * @param mixed $title
 *
 * @return User
 */
public function setPassword($password):User
  {
    $this->password = $password;

    return $this;
  }
}
