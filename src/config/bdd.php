<?php 

// L'extension PDO, pour php Dtata Objects, definit une interface pour accéder à une base de données de puis PHP, et permet d'éxécuter des requetes SQL.
try{
    $pdo =new PDO(
        'mysql:host=localhost;dbname=library_db', //diver mysql, serveur de la BDD(host), nom de ma BDD(bdname)
        'root', //nom de l'utilisateur
        '', //mot de passe de l'utlisateur
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);// On affiche les erreurs 
    } catch(Exception $e) {
        die('Erreur:'. $e->getMessage());
    }
        ?>