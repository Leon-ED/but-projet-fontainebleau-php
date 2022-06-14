<?php
require_once("../include/phpHeader.inc.php");
// Récupère la langue et les textes selon la langue choisie
$currentPage = basename(__FILE__,'.php')."_php";
$fileName = basename(__FILE__,'.php').".php";
?>
<!DOCTYPE html>
<html lang=<?php echo "$lang" ?>>
<!-- Début du head générée par php -->
<head>
    <meta charset="utf-8" />
    <title><?php echo ${$currentPage."_title"}[$lang] ;  ?></title>
    <meta name="description" content=<?php echo ${$currentPage."_desc"}[$lang] ?>>

<!-- Head teamplate -->
<?php include_once("./teamplates/head.php"); ?>

    <body>
        <a id='skip' href="#content"><?php echo "$gotoContent[$lang]" ?></a>
        <div class="bloc"></div>
        <div class="top">
            <div class="container">
                <div class="content">
                    <p><?php echo ${$currentPage."_splashScreen"}[$lang] ?></p>
                </div>
            </div>
        </div>

<?php include_once("./teamplates/nav_bar.php"); ?>
<!-- Contenu de la page -->


<main class="connexion_main" >

    <?php
if(isset($_SESSION["connecte"]) && isset($_SESSION["connecte"]) == "true" && isset($_SESSION["user"]) ){
    echo "<h2>".${$currentPage."_alreadyConnected"}[$lang]."</h2>";
    header("Location: ./index.php");
}else if(isset($_POST['login']) && !empty($_POST["login"]) && isset($_POST['password']) && !empty($_POST["password"])){

        if(connexion($_POST["login"], $_POST["password"], $bdd)){
            echo "<h2> Vous êtes désormais connecté</h2>";
                header("Location: ./index.php");
        }else{
            echo "<h2> La connexion a échouée</h2>";
        }
}else{
       
?>
     <h1 id="content"><?php echo ${$currentPage."_h1"}[$lang];?></h1>
    <form action="#" method="post" class="connexion_form">
        
        <div>
            <label for="login"><?php echo ${$currentPage."_login"}[$lang];?></label>
            <input type="text" id="login" name="login" placeholder="<?php echo ${$currentPage."_login"}[$lang];?>">
        </div>

        <div>
            <label for="password"><?php echo ${$currentPage."_password"}[$lang];?></label>
            <input type="password" id="password" name="password" placeholder="<?php echo ${$currentPage."_password"}[$lang];?>">  
        </div>

            <input type="submit" value="<?php echo ${$currentPage."_submit"}[$lang];?>">
            <a href="./register.php"><?php echo ${$currentPage."_createAccount"}[$lang];?></a>
    
    </form>
        <h2><?php echo ${$currentPage."_h2"}[$lang];?></h2>
        <div class="article-content">
        <p >
           <?php echo ${$currentPage."_speech"}[$lang];?>
        </p>
        <div>







<?php }
echo "</main>";
include_once("./teamplates/footer.php"); ?>


    </body>