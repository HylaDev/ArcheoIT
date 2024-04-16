<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcheoIT | Admin - Gestion des contacts</title>
    <!--Bootstrap 5 link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Mes feuilles de style-->
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>    
     <!-- mon sidebar  -->
    <div class="sidebar">
        <a href="dashboard.php" class="" title="dashboard"><i class="fa fa-dashboard"></i> <span>dashboard</span></a>
        <a href="gestion_contacts.php" class ="active" title="gestion des contacts"><i class="fa fa-envelope"></i> <span>gestion des contacts</span></a>
        <a href="" title="gestion des inscriptions"><i class="fa fa-users"></i> <span>gestion des inscriptions</span></a>
        <a href="/ArcheoIT/index.php" title="retour au site"><i class="fa fa-globe"></i> <span>retour au site</span></a>
    </div>

    <!-- contenu de la page -->
    <div class="content">
        <div class="container mt-5">
        <h2>Liste des contacts via le formulaire de contact</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>id</th>
          <th>nom</th>
          <th>prenom</th>
          <th>email</th>
          <th>objet</th>
          <th>message</th>
          <th>actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
            require('connexion_bd.php');

        // reccupérer les données de la base de données
        $sql = "SELECT id, nom, prenom, email, objet, body FROM contacts";
        $execution = mysqli_query($connected, $sql);

        if ($execution->num_rows > 0) {
          // afficher les données dans un tableau
          while($row = $execution->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["nom"]."</td>";
            echo "<td>".$row["prenom"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["objet"]."</td>";
            echo "<td>".$row["body"]."</td>";
            echo "<td><a href='suppression_contact.php?id=".$row["id"]."' class='btn btn-danger'><i class='fa fa-trash'></i></a></td>";
            echo "</tr>";
          }
        } else {
            echo "<tr><td colspan='4'>Il y a aucune demande de contact</td></tr>";
        }

        // Tuer la connexion à la base de données
        $connected->close();
        ?>
      </tbody>
    </table>
        </div> 
    </div> 

    <!--Bootstrap 5 script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Fontawesome -->
    <script src="https://kit.fontawesome.com/c2cd48c276.js" crossorigin="anonymous"></script>
</body>
</html>
    <!--Bootstrap 5 script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Fontawesome -->
    <script src="https://kit.fontawesome.com/c2cd48c276.js" crossorigin="anonymous"></script>
</body>
</html>