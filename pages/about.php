<?php
require_once("../include/phpHeader.inc.php");
// Récupère la langue et les textes selon la langue choisie
$currentPage = basename(__FILE__,'.php')."_php";
$fileName = basename(__FILE__,'.php').".php";

?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <title><?php echo $about[$lang]." : ".$palaceFontainebleau[$lang]?></title>
        <meta charset="utf-8" />
        <meta name="description" content="Projet UNESCO : Site web du château de Fontainebleau et de son parc">
        <meta name="author" content="Léon EDMEE">
        <meta name="robots" content="noindex, nofollow" />
        <link rel="icon" href="../fichiers/medias/images/icon.PNG">
        <link rel="stylesheet" href="../fichiers/css/styles.css">
        <link rel="stylesheet" href="../fichiers/css/about.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a id='skip' href="#content"><?php echo $gotoContent[$lang] ?></a>
        <div class="bloc"></div>
        <div class="top">
            <div class="container">
                <div class="content">
                    <p>
                        A propos du site
                        </p>
                </div>
            </div>
        </div>
        <div id='top'>
            <?php include_once("./teamplates/nav_bar.php"); ?>
        </div>
        <article>
            <aside>
                <p>
                   <?php echo ${$currentPage."_speech3"}[$lang]?>
                </p>
                <iframe class="bordures" 
                src="https://docs.google.com/forms/d/1cw4fpdLhe2kdw7oKnhjoc27fqYGBJfMAFxixlC-cxYI/viewform?embedded=true" 
                width="400" height="600" frameborder="0" marginheight="0" marginwidth="0">Chargement…
                </iframe>

            </aside>
            <div class="article-content">
                <h1><?php echo $about[$lang]?></h1>
                    <p>
                   <?php echo ${$currentPage."_speech"}[$lang]?>
                        <ul>

                            <?php
                            $sql = "SELECT * FROM contributeur";
                            $stmt = $bdd->prepare($sql);
                            $stmt->execute();
                            while($contrib = $stmt->fetch()){
                                echo "<li>".$contrib["nom"]." ".$contrib["prenom"]." : <strong>".$contrib["role"] ."</strong></li>";
                            }


                            ?>

                        
                        </ul>

                    </p>
                    <?php echo ${$currentPage."_speech4"}[$lang]?>
                   <?php echo ${$currentPage."_speech2"}[$lang]?>
            </div>

        </article>
        
<?php include_once("./teamplates/footer.php"); ?>

    </body>