<!-- Récupère la langue et les textes selon la langue choisie -->
<?php include_once("../include/lang.php");
$currentPage = basename(__FILE__,'.php')."_php"; ?>
<!DOCTYPE html>
<html lang=<?php echo "$lang" ?>>
<!-- Début du head générée par php -->
<head>
    <meta charset="utf-8" />
    <title><?php echo ${$currentPage."_title"}[$lang] ;  ?> </title>
    <meta name="description" content=<?php echo ${$currentPage."_desc"}[$lang] ?> >
<?php include_once("./teamplates/head.php"); ?>

<!-- Fin du head -->

<body>
<!-- Barre de navigation  -->
<?php include_once("./teamplates/nav_bar.php"); ?>
        <a id='skip' href="#content"><?php echo "$gotoContent[$lang]" ?></a>
        <div class="bloc"></div>
        <div class="top">
            <div class="container">
                <div class="content">
                    <p><?php echo ${$currentPage."_splashScreen"}[$lang] ?></p>
                </div>
            </div>
        </div>
<!-- Contenu de la page -->



</body>







<!-- Pied de page généré par php  -->
<?php include_once("./teamplates/footer.php"); ?>