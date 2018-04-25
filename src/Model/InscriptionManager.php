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
class InscriptionManager extends AbstractManager
{
    const TABLE = 'users';



    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
        $this->className = __NAMESPACE__ . '\\' . 'Inscription';
    }

    public function newUser($newProfil, $mail)
    {
        if (isset($_POST))
        {
            if (count($_POST)>0)
            {

        $query = "INSERT INTO $this->table (firstName, lastName, adress, mail, password, status) VALUES (:firstName, :lastName, :adress, :mail, :password, 'user')";

        $statement = $this->pdoConnection->prepare($query);

        $statement->bindParam(':firstName', $newProfil['firstName'], \PDO::PARAM_STR);
    		$statement->bindParam(':lastName', $newProfil['lastName'], \PDO::PARAM_STR);
    		$statement->bindParam(':adress', $newProfil['adress'], \PDO::PARAM_STR);
    		$statement->bindParam(':mail', $mail, \PDO::PARAM_STR);
    		$statement->bindParam(':password', $newProfil['password'], \PDO::PARAM_STR);

    		$statement->execute();
            }
        }

    }
}
