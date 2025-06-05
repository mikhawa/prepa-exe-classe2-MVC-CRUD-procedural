<?php
# controller/PublicController.php
require_once "../model/ArticleModel.php";

if(isset($_GET['pg'])){
    if($_GET['pg']==="login"){
        // ici tentative de connexion

        // appel de la vue
        require_once "../view/login.html.php";
    }
}else {
    //chargement des articles pour l'accueil
    $articles = getArticlesPublished($db);
    require_once "../view/homepage.html.php";
}