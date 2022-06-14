<?php
require_once("../include/phpHeader.inc.php");
// Récupère la langue et les textes selon la langue choisie
$currentPage = basename(__FILE__,'.php')."_php";
$fileName = basename(__FILE__,'.php').".php";
$currentPage = basename(__FILE__,'.php')."_php";
$fileName = basename(__FILE__,'.php').".php";
if(isset($_SESSION["connecte"]) && isset($_SESSION["connecte"]) == "true" && isset($_SESSION["user"]) ){
}else{
    header("Location: ./index.php");
}
$sql = "SELECT * FROM utilisateur WHERE idUser = :idUser";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':idUser', $_SESSION["user"]);
$stmt->execute();
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang=<?php echo "$lang" ?>>
<!-- Début du head générée par php -->
<head>
    <meta charset="utf-8" />
    <title><?php echo ${$currentPage."_title"}[$lang] ;  ?></title>
    <meta name="description" content=<?php echo ${$currentPage."_desc"}[$lang]?>>

<!-- Head teamplate -->
<?php include_once("./teamplates/head.php");
?>

    <body>
        <a id='skip' href="#content"><?php echo "$gotoContent[$lang]" ?></a>
        <div class="bloc"></div>
        <div class="top">
            <div class="container">
                <div class="content">
                    <p><?php echo ${$currentPage."_splashScreen"}[$lang].$user["prenom"]." ".$user["nom"] ?></p>
                </div>
            </div>
        </div>

<?php include_once("./teamplates/nav_bar.php"); ?>
    <article>
            <div class="article-content">
                <h1><?php echo ${$currentPage."_yourInfos"}[$lang];?></h1>

                



                </div>
        </article>



<?php include_once("./teamplates/footer.php"); ?>


    </body>