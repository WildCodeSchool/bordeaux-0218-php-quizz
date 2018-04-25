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
use Model\ProfilManager;
use Model\InscriptionManager;
use Model\VerificationManager;

/**
 * Class ProfilController
 *
 */
class EditProfilController extends AbstractController
{

    /**
     * Display item informations specified by $id
     *
     * @param  int $id
     *
     * @return string
     */
    public function editProfil()
    {
      //if (isset($_SESSION['mail']))
      //{
          var_dump($_SESSION);
          $profil = new ProfilManager();
          $profilId = $profil->profilId($_SESSION['mail']);
          $userProfil = $profil->profil($profilId['id']);

          return $this->twig->render('Profil/editProfilUser.html.twig', ['profil' => $userProfil]);
      //}
    }
}
