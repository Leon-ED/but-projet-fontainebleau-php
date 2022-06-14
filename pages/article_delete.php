<?php
require_once("../include/phpHeader.inc.php");
// Récupère la langue et les textes selon la langue choisie
$currentPage = basename(__FILE__,'.php')."_php";
$fileName = basename(__FILE__,'.php').".php";

if(isset($_SESSION["connecte"]) && $_SESSION["connecte"] == "true" && isset($_SESSION["user"]) && isset($_SESSION["isadmin"]) && $_SESSION["isadmin"] == "true" && isset($_GET["id"])){
    $sql = "SELECT * FROM article WHERE idarticle = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $_GET["id"]);
    $stmt->execute();
    $article = $stmt->fetch();

    if($stmt->rowCount() >= 1){
        $sql = "DELETE FROM ecrire WHERE idarticle = :id";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':id', $_GET["id"]);
        $stmt->execute();

        $sql = "DELETE FROM article WHERE idarticle = :id";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':id', $_GET["id"]);
        $stmt->execute();
        header("Location: ./article.php?lang=".$lang."#content");


    }


    header("Location: ./article.php?lang=".$lang."#content");



}else{
    header("Location: ./index.php?lang=".$lang);
}

?>