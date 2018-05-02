<?php

//add our database connection script
include_once 'database.php';

//process the form
if(isset($_POST['signupBtn'])) {
  //initialize an array to store any error message from the form
  $form_errors = array();

  //form validation
  $required_fields = array('mail', 'password');

  //loop through the required fields array
  foreach ($required_fields as $nameOfField) {
    if(isset($_POST[$name_of_field] || $_POST[$name_of_field] == NULL) {
      $form_errors[] = $name_of_field . "est un champ obligatoire";
    }
  }

  //check if array is empty : if yes, process form data and insert record
  if(empty($form_errors)) {
    //collect form data and store in variables
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $city = $_POST['adress'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
  }
}
  //hashing the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

try {
      // Create SQL insert statement
      $sqlInsert = "INSERT INTO users (firstName, lastName, adress, mail, password)
                    VALUES (:firstName, :lastName, :adress, :mail, :password)";

      // Use PDO prepared to sanitize data
      $statement = $db->prepare($sqlInsert);

      // Add the data into the database
      $statement->execute(array(':firstName' => $firstName, ':lastName' => $lastName, ':adress' => $city, ':mail' => $mail, ':password' => $hashed_password));

      // Check if one new row has been created
      if($statement->rowCount() == 1) {
        $result = "<p> Inscription réussie </p>";
      }

} catch (PDOException $ex) {
      $result = "<p> Une erreur s'est produite".$ex->getMessage()."</p>";

    }

}
else {
  if(count($form_errors) == 1) {
    $result = "<p>Il y a une erreur dans le formulaire</p><br>";

    //loop through error array and display all items
    foreach($form_errors as $error) {
      $result .= "<li>{$error}</li>";
    }
    $result .= "</ul></p>"
  }
}



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Page d'inscription</title>
  </head>
  <body>
    <h2>Page d'inscription</h2>

    <h3>Formulaire d'inscription</h3>

<?php if(isset($result)) echo $result; ?>

    <form action="" method="POST">
      <table>
        <tr><td>Prénom:</td> <td><input type="text" value"" name="firstName"></td></tr>
        <tr><td>Nom:</td> <td><input type="text" value"" name="lastName"></td></tr>
        <tr><td>Ville:</td> <td><input type="text" value"" name="adress"></td></tr>
        <tr><td>E-mail:</td> <td><input type="email" value"" name="mail"></td></tr>
        <tr><td>Mot de passe:</td> <td><input type="text" value"" name="password"></td></tr>
        <tr><td><input type="submit" value="Signup" name="sign"></td></tr>
      </table>
    </form>
    <p><a href="index.php">Retour</a></p>
  </body>
</html>
