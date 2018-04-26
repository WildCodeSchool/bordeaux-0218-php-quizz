<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace Model;

/**
 *
 */
class ConnexionManager extends AbstractManager
{
    const TABLE = 'users';

    

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
        $this->className = __NAMESPACE__ . '\\' . 'Connexion';
    }

	public function mailConnexion($mail)
    {
        $query = "SELECT * FROM $this->table WHERE mail=:mail";

        $statement = $this->pdoConnection->prepare($query);



        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindValue('mail', $mail, \PDO::PARAM_INT);
        $statement->execute();



         return $statement->fetch();
    }

}