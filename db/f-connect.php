<?php

$host = "localhost";
$dbname = "bdd_bilal";
$dbuser = "root";
$dbpswd = "root";

// PHP essaie d'exécuter les instructions à l'intérieur du bloc
try
{
    // On se connecte à MySQL
    $db = new PDO('mysql:host='.$host.';dbname='.$dbname,$dbuser,$dbpswd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    echo "Une erreur est survenue lors de la connexion à la base de données...";
    die('Erreur : ' . $e->getMessage());
}
// Si tout va bien, on peut continuer


$con = mysqli_connect("localhost","root","root");

if (!$con)
{
  die();
}

mysqli_select_db($con, "dotcode");

?> 