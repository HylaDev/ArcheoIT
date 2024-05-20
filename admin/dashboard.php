<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcheoIT | Admin - Tableau de bord</title>
    <!--Bootstrap 5 link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Mes feuilles de style-->
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>

    <!-- mon sidebar  -->
    <div class="sidebar">
        <a href="dashboard.php" class="active" title="dashboard"><i class="fa fa-dashboard"></i> <span>dashboard</span></a>
        <a href="gestionContacts.php" title="gestion des contacts"><i class="fa fa-envelope"></i> <span>gestion des contacts</span></a>
        <a href="gestionInscription.php" title="gestion des inscriptions"><i class="fa fa-users"></i> <span>gestion des inscriptions</span></a>
        <a href="/ArcheoIT/index.php" title="retour au site"><i class="fa fa-globe"></i> <span>retour au site</span></a>
    </div>

    <!-- contenu de la page -->
    <div class="content">
        <div class="container mt-5 myd-flex">
            <?php
                require('connexionBaseDonnees.php');
                // requête sql pour compter le nombre de demande de contacts
                $sql = "SELECT COUNT(*) AS totalContacts FROM contacts";

                // exécution de la requête sql
                $reponse = $connected->query($sql);

                
                echo "<a href='gestionContacts.php'>";
                echo "<div class='contacts mx-4 my-3'>";

                if ($reponse->num_rows > 0) {
                    // récupération du nombre total avec fetch_assoc()
                    $row = $reponse->fetch_assoc();
                    $totalContacts = $row["totalContacts"];
                    
                    // afficher le total des contacts
                    echo "<h1><b><i class='fa fa-envelope'></i> $totalContacts</b></h1>";
                    echo"<p class='text-center'>contacts</p>";
                } else {
                    // afficher le total des contacts
                    echo "<h1><b><i class='fa fa-envelope'></i> 0</b></h1>";
                    echo"<p class='text-center'>contacts</p>";
                }
                   echo " </div>";
                echo "</a>";
            ?>

            <?php
                require('connexionBaseDonnees.php');
                // requête sql pour compter le nombre de demande de contacts
                $sql = "SELECT COUNT(*) AS total FROM inscription_stage";

                // Execute query
                $result = $connected->query($sql);

                
                echo "<a href='gestionInscription.php'>";
                echo "<div class='contacts mx-4 my-3'>";

                if ($result->num_rows > 0) {
                    // Fetch total count
                    $row = $result->fetch_assoc();
                    $totalCount = $row["total"];
                    
                    // Display total count
                    echo "<h1><i class='fa fa-users'></i> $totalCount</h1>";
                    echo"<p class='text-center'>inscriptions</p>";
                }
                else {
                    // afficher le total des contacts
                    echo "<h1><b><i class='fa fa-users'></i> 0</b></h1>";
                    echo"<p class='text-center'>inscriptions</p>";
                }
                   echo " </div>";
                echo "</a>";
            ?>

        </div> 
    </div> 

    <!--Bootstrap 5 script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Fontawesome -->
    <script src="https://kit.fontawesome.com/c2cd48c276.js" crossorigin="anonymous"></script>
</body>
</html>