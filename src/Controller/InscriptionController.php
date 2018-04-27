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
<<<<<<< HEAD
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
=======
            $_SESSION['mail']=$_POST['mail'];
            header('Location: /thanks');
            var_dump($_SESSION);
>>>>>>> 07612d193c2723e50dd28287c7e1bf1abddedceb
        }

        return $this->twig->render('Inscription/_form.html.twig');
    }

    public function thanks()
    {
        if (isset($_SESSION['mail']))
        {
            $profil = new ProfilManager();
            $profilId = $profil->profilId($_SESSION['mail']);
            $userProfil = $profil->profil($profilId['id']);


        return $this->twig->render('Inscription/thanks.html.twig', ['profil' => $userProfil]); 

        }  
    }




}
