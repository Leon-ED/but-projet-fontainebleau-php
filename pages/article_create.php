<?php
require_once("../include/phpHeader.inc.php");
if(isset($_SESSION["connecte"]) && $_SESSION["connecte"] == "true" && isset($_SESSION["user"]) && isset($_SESSION["isadmin"]) && $_SESSION["isadmin"] == "true"){

    $id = $_SESSION["user"];
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $uploaddir = "../fichiers/medias/images/articles/";
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);

    if (copy($_FILES['file']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    header("Location: ./admin.php?erreur=uploadError");
}

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }
    else {
        header("Location: ./admin.php?erreur=fileTypeError");
        $uploadOk = 0;
    }

    $sql = "INSERT INTO article (datecreation, titre, contenu, image) VALUES (:date, :titre, :contenu, :image) RETURNING idarticle";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':date', date("Y-m-d"));
    $stmt->bindParam(':titre', $_POST["titre"]);
    $stmt->bindParam(':contenu', $_POST["contenu"]);
    $stmt->bindParam(':image',basename($_FILES['file']['name']));
    $stmt->execute();
    $idArticle = $stmt->fetch();
    $idArticle = $idArticle["idarticle"];


    $sql = "INSERT INTO ecrire (idadmin, idarticle) VALUES (:idamin, :idarticle)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':idamin', $id);
    $stmt->bindParam(':idarticle', $idArticle);
    $stmt->execute();


    header("Location: ./admin.php?success=articleCreated");


    // header("Location: ./article.php");
}else{
    header("Location: ./index.php?lang=".$lang);
}



?>