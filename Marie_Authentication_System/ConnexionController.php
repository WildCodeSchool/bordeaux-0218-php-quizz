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
      if(isset($_POST['loginBtn'])) {
        //array to hold errors
        $form_errors = array();


        //validate
        $required_fields = array('mail', 'password');

        $form_errors = array_merge($form_errors, check_empty_fields($required_fields));


        if(empty($form_errors)) {
          //collect form database
          $firstName = $_POST['firstName'];
          $lastName = $_POST['lastName'];
          $city = $_POST['adress'];
          $mail = $_POST['mail'];
          $password = $_POST['password'];

          //check if email exist in the database
          $sqlQuery = "SELECT * FROM users WHERE mail=:mail";
          $statement->execute(array(':mail' => $mail));

          while($row = $statement->fetch()) {
            $mail = $row['mail'];
            $hashed_password = $row['password'];

            if(password_verify($password, $hashed_password)) {
              $_SESSION['mail'] = $mail;
              $_SESSION['password'] = $password;
              header("location: index.php");

            } else {
              $result = "<p>Mot de passe ou email invalide.</p>"
            }

          }


        }elseif {
          if(count($form_errors) == 1)) {
            $result = "<p>Il y a une erreur dans le formulaire</p>";
          } else {
            $result = "<p>Il y a " .count($form_errors). "erreurs dans le formulaire."</p>
          }
        }
      }


function check_empty_fields(required_fields_array) {
  //initialize an array to store error messages
  $form_errors = array();

  //loop through the required fields array
  foreach($required_fields_array as $name_of_field) {
    if(!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL){
      $form_errors[] = $name_of_field . "est un champ requis";
    }
  }

  return $form_errors;
}

function show_errors($form_errors) {
  $errors = "";

  //loop through error array and display all items in a list
  foreach($form_errors_array as $the_error) {
    $errors .="<li> {$the_error} </li>";
  }
$errors .= "</ul></p>"
return $errors;

}
