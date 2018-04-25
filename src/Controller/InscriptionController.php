<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\Users;
use Model\InscriptionManager;
use Model\ProfilManager;
use Model\VerificationManager;

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
            $setMail = new VerificationManager();
        $mail = $setMail->verificationMail($_POST['mail']);

            if ($mail != TRUE)
            {

            $inscription = new InscriptionManager();
            $inscription->newUser($_POST, $mail);
                $_SESSION['mail']=$mail;
                header('Location: /profil');
            }
            else
            {
                header('Location: /formulaire');
            }
        }

        return $this->twig->render('Inscription/_form.html.twig');
    }
}
