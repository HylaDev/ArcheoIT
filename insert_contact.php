<?php
    require('connect_bd.php');
    
    // collecte des données du form
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $objet = $_POST['objet'];
    $body = $_POST['body'];

    // requête d'insertion des données
    $sql = "INSERT INTO contacts (nom,prenom,email,objet,body) VALUES ('$nom', '$prenom','$email','$objet','$body')";
    $execution = mysqli_query($connected, $sql);
    
    if ($execution) {
      header("Location:contact_conf.php");
    } else {
      echo "Erreur: " . var_dump($sql);
    }
  
    mysqli_close($conn);
?>