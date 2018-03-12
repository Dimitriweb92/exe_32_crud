<?php
/**
<<<<<<< HEAD
 * Contrôleur gérant les articles
 */

require_once "modeles/ArticleModele.php";

$articles = listeArtiAccueil($mysqli);

// on prend la vue

require_once "vues/Admin.html.php";

