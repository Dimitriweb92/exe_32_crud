<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil du site</title>
</head>
<body>
<h1>Accueil</h1>
<div id="menu">

    <a href="?admin">Administration des articles</a>

</div>
<div id="contenu">
    <?php


    // pas d'articles
    if ($articles == false) {
        echo "<h2>Pas encore d'articles!</h2>";
    } else {
        foreach ($articles AS $item) {
            ?>
            <h3><a href="?article=<?= $item['idarti'] ?>"><?= $item['titre'] ?></a></h3>
            <!-- ici le foreach pour les categ -->
            <p><?= $item['texte'] ?> ... <a href="?article=<?= $item['idarti'] ?>">Lire la suite</a></p>
            <p><?= $item['publie'] ?></p>
            <img width="16px" height="16px" src="vues/img/uptade.png" alt="modifier l'article" onclick="document.location='?admin&modif=<?= $item['idarti'] ?>';"/>
            <img width="16px" height="16px" src="vues/img/delete.png" alt="effacer l'article" onclick="document.location='?admin&delete=<?= $item['idarti'] ?>';"/>
            <img width="16px" height="16px" src="vues/img/save.png" alt="sauvegarder l'article" onclick="document.location='?admin&save=<?= $item['idarti'] ?>';"/>
            <img width="16px" height="16px" src="vues/img/create.png" alt="crée un nouvelle article" onclick="document.location='?admin&create=<?= $item['idarti'] ?>';"/>

            <hr>
            <?php
        }
    }
    ?>
</div>
</body>
</html>
