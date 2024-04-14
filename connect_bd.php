<?php
    // paramètres de connexion à la base de données
    $host = 'localhost';
    $db_name = 'archeoIT';
    $password = '';
    $user = 'root';

    // connexion à la base de données
    $connected = mysqli_connect($host, $user, $password, $db_name);
    
    if (!$connected) {
        die("Erreur de connexion: " . mysqli_connect_error());
    }
?>