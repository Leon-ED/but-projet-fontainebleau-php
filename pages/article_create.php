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
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);



    // header("Location: ./article.php");
}else{
    header("Location: ./index.php?lang=".$lang);
}



?>