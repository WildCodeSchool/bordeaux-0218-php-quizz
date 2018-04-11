<?php
/**
 * Created by PhpStorm.
 * Quizz: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace Model;

/**
 *
 */
class QuizzManager extends AbstractManager
{
    const TABLE = 'quizz';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}
