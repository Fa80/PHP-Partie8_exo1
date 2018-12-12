<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Partie8_Exo1</title>
  </head>
  <body>
    <?php
/*Faire une page HTML permettant de donner à l'utilisateur :

    son User Agent
    son adresse ip
    le nom du serveur */

/*$_SERVER est un tableau contenant des informations comme les en-têtes, dossiers et chemins du script.
Les entrées de ce tableau sont créées par le serveur web.*/?>
<div class="container">
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];?>
  <p><?php echo 'Votre nom d\'utilisateur est' . ' ' . $userAgent; ?></p>

 <?php
$adresseIp = $_SERVER['REMOTE_ADDR'];?>
  <p><?php echo 'Votre adresse IP est' . ' ' . $adresseIp;?></p>

<?php
$serverName = $_SERVER['SERVER_NAME']; ?>
  <p><?php  echo 'Le nom de votre serveur est' . ' ' . $serverName;

     ?></p>
</div>
  </body>
</html>
