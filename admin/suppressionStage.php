<?php
if(isset($_GET['id'])) {
    require('connexionBaseDonnees.php');

  $id = $_GET['id'];
  $sql = "DELETE FROM inscription_stage WHERE id = $id";

  $execution = mysqli_query($connected, $sql);

  if ($execution === TRUE) {
    header("Location:gestionInscription.php");
  } else {
    echo "Erreur lors de la suppression: " . $connected->error;
  }
  // Tuer la connexion à la base de données
  $connected->close();
}
?>