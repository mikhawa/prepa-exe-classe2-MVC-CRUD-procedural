<?php
# controller/PublicController.php
require_once "../model/ArticleModel.php";

if(isset($_GET['pg'])){
    if($_GET['pg']==="login"){

    }
}else {
    $articles = getArticlesPublished($db);
    require_once "../view/homepage.html.php";
}