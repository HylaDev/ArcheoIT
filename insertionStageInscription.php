<?php

// Connexion à la base de données
$host= "localhost";
$dbname = "archeoIT";
$username = 'root';
$password = '';

// collecte des données du form
$email = $_POST['u_email'];
$nom = $_POST['lastname'];
$prenom = $_POST['firstname'];
$date_naissance = $_POST['date_naissance'];
$stage = $_POST['stage'];
$commentaires = $_POST['commentaires'];

try {
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // modifier le mode de l'erreur en exception
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // requête sql
    $sql = "INSERT INTO inscription_stage (nom, prenom, email, date_naissance, stage, commentaires)
            VALUES ('$nom', '$prenom', '$email', '$date_naissance', '$stage', '$commentaires')";
    
    // excecution de la requête
    $connexion->exec($sql);
     
    header("Location:stageConfirmation.php?nom=$nom&prenom=$prenom&email=$email&date_naissance=$date_naissance&stage=$stage&commentaires=$commentaires");
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
// Fermeture de la connexion à la base de données
$connexion = null;
?>
