<?php
    include("connexion.php");
    include("traitement.php");

    // On détermine sur quelle page on se trouve
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $currentPage = (int) strip_tags($_GET['page']);
    }else{
        $currentPage = 1;
    }

    // On détermine le nombre d'articles par page
    $parPage = 4;

    // On calcule le nombre de pages total
    $pages = ceil($nbrestotal->rowCount() / $parPage);
    //echo $pages;
   
    // Calcul du 1er article de la page
    $premier = ($currentPage * $parPage) - $parPage;
    //echo $premier;

    $query = $con->prepare($req1);
    $query->bindValue(':premier', $premier);
    $query->bindValue(':parpage', $parPage);
    $query->execute();
   // var_dump($query);