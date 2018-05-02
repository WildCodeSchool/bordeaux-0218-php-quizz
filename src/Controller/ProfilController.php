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
 * Class ProfilController
 *
 */
class ProfilController extends AbstractController
{

    /**
     * Display item informations specified by $id
     *
     * @param  int $id
     *
     * @return string
     */
    public function profil()
    {

        if (isset($_SESSION['mail']))
        {
            $profil = new UserManager();
            $profilId = $profil->profilId($_SESSION['mail']);
            $userProfil = $profil->profil($profilId['id']);


        return $this->twig->render('Profil/profil.html.twig', ['profil' => $userProfil]);
        }
    }

}
