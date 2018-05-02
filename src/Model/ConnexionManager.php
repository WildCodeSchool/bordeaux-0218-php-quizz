<?php
/**
 * Created by PhpStorm.
 * User: Marie
 * Date: 02/05/2018
 * Time: 10:00
 * PHP version 7
 */

namespace Model;

/**
 *
 */
class ConnexionManager extends AbstractManager
{
    const TABLE = 'user';



    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
        $this->className = __NAMESPACE__ . '\\' . 'User';
    }

    public function emailConnexion($mail)
    {
        $sqlQuery = "SELECT * FROM $this->table WHERE mail=':mail'";

        $statement = $this->pdoConnection->prepare($sqlQuery);

        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindValue(':mail', $mail, \PDO::PARAM_STR);
        $statement->execute();


		    $result= $statement->fetchAll();
        var_dump($result);
        return $result;
    }

}
