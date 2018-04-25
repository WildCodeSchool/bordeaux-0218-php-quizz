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
    public function EditProfil()
    {
      if (isset($_SESSION['mail']))
      {
          $profil = new ProfilManager();
          $profilId = $profil->profilId($_SESSION['mail']);
          $userProfil = $profil->profil($profilId['id']);
          $inscription = new InscriptionManager();
          $inscription->newUser($_POST);
          if (isset($_POST) && count($_POST)>0)
          {
              $_SESSION['mail']=$_POST['mail'];
              header('Location: /profil');
              var_dump($_POST);
          }

        return $this->twig->render('Profil/editProfilUser.html.twig', ['profil' => $userProfil]);
        }
    }
}
