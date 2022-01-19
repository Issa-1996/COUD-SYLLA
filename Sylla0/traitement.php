<?php
    include("connexion.php");
    $req1="SELECT id, rubrique1, rubrique2, montant FROM retenues";
    try{
        if($nbrestotal=$con->query($req1)){
            /*$data=$result->fetch(PDO::FETCH_ASSOC);
            while($data=$result->fetch(PDO::FETCH_ASSOC)){
                echo $data["id"]." ".$data["rubrique1"]." ".$data["rubrique2"]." ".$data["montant"]."<br/>";
            }*/
        }
    }catch(PDOException $e){
        die("Erreur: ".$e->getMessage());
    }