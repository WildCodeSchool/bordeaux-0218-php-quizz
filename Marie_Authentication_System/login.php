<?php
include_once 'session.php';
include_once 'database.php';
include_once 'utilities.php';

if(isset($_POST['loginBtn'])) {
  /array to hold errors
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
    $sqlQuery = "SELECT * FROM users WHERE use = :mail";
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


  }else{
    if(count($form_errors) == 1)) {
      $result = "<p>Il y a une erreur dans le formulaire</p>";
    } else {
      $result = "<p>Il y a " .count($form_errors). "erreurs dans le formulaire."</p>
    }
  }
}


if(isset($result)) echo $result; ?>
<?php if(!empty($form_errors)) echo $show_errors($form_errors); ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Page d'authentification</title>
  </head>
  <body>
    <h2>Page d'authentification</h2>
    <h3>Formulaire de connexion</h3>



    <form action="" method="POST">
      <table>
        <tr><td>E-mail:</td> <td><input type="email" value"" name="email"></td></tr>
        <tr><td>Mot de passe:</td> <td><input type="text" value"" name="password"></td></tr>
        <tr><td><input type="submit" value="Signin" name="loginBtn"></td></tr>
      </table>
    </form>
    <p><a href="index.php">Retour</a></p>
  </body>
</html>
