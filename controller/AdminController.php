<?php
/**
<<<<<<< HEAD
 * Contrôleur gérant les articles
 */
=======
 * Contrôleur gérant l'adùministration
 */

>>>>>>> 15bc1cd096eaba534091e16e1853024b5659d809
// chargement des modeles
require_once "modeles/ArticleModele.php";

// on récupère les résumés d'articles depuis arti
$articles = listeArtiAccueil($mysqli);

// on prend la vue
<<<<<<< HEAD
require_once "vues/admin.html.php";
=======
require_once "vues/Admin.html.php";
>>>>>>> 15bc1cd096eaba534091e16e1853024b5659d809
