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
        if (trim($firstName) != '')
        {
            return $firstName;
        }
    }

    public function verificationLastName ($lastName)
    {
        if (trim($lastName) != '')
        {
            return $lastName;
        }
    }

    public function verificationAdress ($adress)
    {
        if (trim($adress) != '')
        {
            return $adress;
        }
    }

    public function verificationMail ($mail)
    {
        $query = "SELECT * FROM $this->table WHERE mail = ':mail'";

        $statement = $this->pdoConnection->prepare($query);



        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindParam(':mail', $mail, \PDO::PARAM_STR);
        $statement->execute();
        $alreadyInTable = $statement->fetchAll();

        $_SESSION['inTable']=$alreadyInTable;

        if (trim($mail) != '' && $alreadyInTable === FALSE)
        {

            return $mail;
        }
        else
        {
            return TRUE;
        }
    }

    public function verificationPassword ($password)
    {
        if (trim($password) != '')
        {
            return $password;
        }
    }


}
