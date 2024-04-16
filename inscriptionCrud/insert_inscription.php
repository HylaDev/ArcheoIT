<?php
    require('/ArcheoIT/dataBase/connect_bd.php');
    
    // collecte des données du form
    $email = $_POST['u_email'];
    $nom = $_POST['lastname'];
    $prenom = $_POST['firstname'];
    $date_naissance = $_POST['date_naissance'];
    $commentaire = $_POST['commentaires'];
    $stage = $_POST['stage'];

    // requête d'insertion des données
    $sql = "INSERT INTO inscription_stage (nom,prenom,email,date_naissance,stage,commentaires) VALUES ('$nom', '$prenom','$email','$date_naissance','$stage', '$commentaires')";
    $execution = mysqli_query($connected, $sql);
    
    if ($execution) {
      header("Location:stage_confirmation.php");
    } else {
      echo "Erreur: " . var_dump($sql);
    }
  
    mysqli_close($conn);
?>