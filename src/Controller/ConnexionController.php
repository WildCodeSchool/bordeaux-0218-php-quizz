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
* Class ConnexionController
*
*/
class ConnexionController extends AbstractController
{

  /**
  * Display inscription listing
  *
  * @return string
  */
  public function connexionForm()
  {

    if(isset($_POST['loginBtn']) && count($_POST) === 3)
    {
      $connexion = new UserManager();
      $isLogged = $connexion->emailConnexion($_POST['email']);
      echo "<br>";
      echo "<br>";
      var_dump($isLogged);
    }

return $this->twig->render('Connexion/connexion.html.twig');

  }
}
