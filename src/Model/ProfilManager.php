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
class ProfilManager extends AbstractManager
{
    const TABLE = 'users';



    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
        $this->className = __NAMESPACE__ . '\\' . 'Profil';
    }

	public function profil($id)
    {
        $query = "SELECT * FROM $this->table WHERE id=:id";

        $statement = $this->pdoConnection->prepare($query);



        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();



         return $statement->fetchAll();

    }

    public function profilId($mail)
    {
    	$query = "SELECT id FROM $this->table WHERE mail=:mail";

        $statement = $this->pdoConnection->prepare($query);



        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindParam(':mail', $mail, \PDO::PARAM_STR);
        $statement->execute();



         return $statement->fetch();
    }
}
