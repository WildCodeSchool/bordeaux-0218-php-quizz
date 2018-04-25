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
            $userEntriesVerification = new VerificationManager();
            $mail = $userEntriesVerification->verificationMail($_POST['mail']);
            if ($mail != FALSE)
            {
            $inscription = new InscriptionManager();

            $firstName = $userEntriesVerification->verificationFirstName($_POST['firstName']);
            $lastName = $userEntriesVerification->verificationLastName($_POST['lastName']);
            $adress = $userEntriesVerification->verificationAdress($_POST['adress']);
            $password = $userEntriesVerification->verificationPassword($_POST['password']);


            $inscription->newUser($firstName, $lastName, $adress, $password, $mail);
            $_SESSION['mail1']=$mail;
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
