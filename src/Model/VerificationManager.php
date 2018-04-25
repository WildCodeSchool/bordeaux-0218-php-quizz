<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 18/04/2018
 * Time: 12:00
 * PHP version 7
 */

namespace Model;

/**
 *
 */
class VerificationManager extends AbstractManager
{
    const TABLE = 'users';



    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
        $this->className = __NAMESPACE__ . '\\' . 'Verification';
    }

    public function verificationFirstName ($firstName)
    {
        if (trim($firstName) != '' && strlen(trim($firstName)) > 3)
        {
            return trim($firstName);
        }
    }

    public function verificationLastName ($lastName)
    {
        if (trim($lastName) != '' && strlen(trim($lastName)) > 3)
        {
            return trim($lastName);
        }
    }

    public function verificationAdress ($adress)
    {
        if (trim($adress) != '' && strlen(trim($adress)) > 1)
        {
            return trim($adress);
        }
    }

    public function verificationMail ($mail)
    {
        $query = "SELECT COUNT(*) FROM $this->table WHERE mail = ':mail'";

        $statement = $this->pdoConnection->prepare($query);



        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindParam(':mail', $mail, \PDO::PARAM_STR);
        $statement->execute();
        $alreadyInTable = $statement->fetch();

        if (trim($mail) != '' && $alreadyInTable === 0)
        {
            return trim($mail);
        }
        else
        {
            return FALSE;
        }
    }

    public function verificationPassword ($password)
    {
        if (trim($password) != '' && strlen(trim($password)) > 5)
        {
            return trim($password);
        }
    }


}







