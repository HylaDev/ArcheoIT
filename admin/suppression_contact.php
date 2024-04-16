<?php
if(isset($_GET['id'])) {
    require('connexion_bd.php');

  $id = $_GET['id'];
  $sql = "DELETE FROM contacts WHERE id = $id";

  $execution = mysqli_query($connected, $sql);

  if ($execution === TRUE) {
    header("Location:gestion_contacts.php");
  } else {
    echo "Erreur lors de la suppression: " . $connected->error;
  }
  // Tuer la connexion à la base de données
  $connected->close();
}
?>
