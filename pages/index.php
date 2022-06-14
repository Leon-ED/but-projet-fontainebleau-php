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
        <article>
            <div class="article-content">
                <h1><?php echo $greeting[$lang] ?></h1>
                    <?php echo $welcomeArticle[$lang] ?>
                    <h2><?php echo $home_vid_title1[$lang] ?></h2>
                    <iframe width="1000" height="500" src="https://www.youtube-nocookie.com/embed/pC2hIv2IFdk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h4><?php echo $home_vid_sub_title1[$lang] ?></h4>
                </p>
                <p>
                    <h2><?php echo $home_vid_title2[$lang] ?></h2>
                    <iframe width="1000" height="500" src="https://www.youtube-nocookie.com/embed/n2A3dzlB804" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h4><?php echo $home_vid_sub_title2[$lang] ?></h4>
                </p>
            </div>
        </article>
<?php include_once("./teamplates/footer.php"); ?>


    </body>