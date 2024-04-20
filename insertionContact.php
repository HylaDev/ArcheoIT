<?php

// Connexion à la base de données
$host= "localhost";
$dbname = "archeoIT";
$username = 'root';
$password = '';

// collecte des données du form
$email = $_POST['email'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$objet = $_POST['objet'];
$body = $_POST['body'];

try {
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // modifier le mode de l'erreur en exception
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // requête sql
    $sql = "INSERT INTO contacts (nom, prenom, email, objet, body)
    VALUES ('$nom', '$prenom', '$email', '$objet', '$body')";

    // excecution de la requête
    $connexion->exec($sql);
     
    header("Location:contactConfirmation.php");
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
// Fermeture de la connexion
$connexion = null;
?>
