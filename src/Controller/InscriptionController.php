<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\User;
use Model\UserManager;

/**
 * Class InscriptionController
 *
 */
class InscriptionController extends AbstractController
{
    /**
     * Display inscription listing
     *
     * @return string
     */
    public function formulaire()
    {
        if (isset($_POST) && count($_POST) === 5)
        {
            $inscription = new UserManager();
            $mail = $inscription->verificationMail($_POST['mail']);
            $info = [];
            if ($mail !== TRUE)
                {
                $info['firstName']=$inscription->verificationFirstName($_POST['firstName']);
                $info['lastName']=$inscription->verificationLastName($_POST['lastName']);
                $info['adress']=$inscription->verificationAdress($_POST['adress']);
                $info['mail']=$mail;
                $info['password']=$_POST['password'];

                $inscription->newUser($info);
                    header('Location: /home');
                }
            else
            {
                header('Location: /formulaire');
            }
        }


        return $this->twig->render('Inscription/_form.html.twig');
    }
}
