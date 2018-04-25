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

    public function newUser($firstName, $lastName, $adress, $password, $mail)
    {

        $query = "INSERT INTO $this->table (firstName, lastName, adress, mail, password, status) VALUES (:firstName, :lastName, :adress, :mail, :password, 'user')";

        $statement = $this->pdoConnection->prepare($query);

        $statement->bindParam(':firstName', $firstName, \PDO::PARAM_STR);
		$statement->bindParam(':lastName', $lastName, \PDO::PARAM_STR);
		$statement->bindParam(':adress', $adress, \PDO::PARAM_STR);
		$statement->bindParam(':mail', $mail, \PDO::PARAM_STR);
		$statement->bindParam(':password', $password, \PDO::PARAM_STR);

		$statement->execute();

    }
}







