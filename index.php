<?php 
include_once'./src/repository/book.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Afficher tous les livres dans une div qui aura un h2 avec le titre du livre et un paragraphe avec la description et un autre paragraphe avec la date de parution -->
     <?php 
     foreach($books as $livres){ ?>
     <div>
        <h2><?= $livres['nom']?></h2>
        <!-- Afficher les 20 premiers caractéres de la description suivi de ... -->
        <p><?= substr($livres['description'],0,20).'...' ?></p>
        <p><?= $livres['annee_parution'] ?></p>
        <!-- Ajouter un lien vers la page détail ou on fait passer l'id du livre  -->
         <a href="./view/detail.php?id=<?=$livres['id']?>">Voir plus</a>
     </div>
    <?php  } ?>
</body>
</html>