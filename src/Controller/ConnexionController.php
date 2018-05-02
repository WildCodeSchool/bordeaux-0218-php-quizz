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
use Model\ConnexionManager;


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
    var_dump($_POST);
    if(isset($_POST['loginBtn']) && count($_POST) === 3)
    {
      $connexion = new ConnexionManager();
      $isLogged = $connexion->emailConnexion($_POST['email']);

      var_dump($isLogged);




}
return $this->twig->render('Item/index.html.twig');
}
}
