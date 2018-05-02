<?php include_once 'session.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Page d'accueil</h2>

<?php if(!isset($_SESSION['mail']));   ?>
    <p>Vous n'êtes actuellement pas authentifié <a href="login.php">Login</a> Pas encore enregistré ? <a href="signup.php">S'inscrire</a></p>
<?php else;   ?>
    <p>Vous êtes actuellement authentifié avec l'adresse <?php if(isset($_SESSION['mail'])) echo $_SESSION['mail']; ?> <a href="logout.php">Déconnexion</a></p>
<?php endif ?>
  </body>
</html>
