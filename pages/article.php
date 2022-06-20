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
<style>
.ftn-articles-ctn{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-items: flex-start;
    margin-top: 2rem;
    gap: 20px

}
a{
    max-width:284px;
}
.ftn-articles-ctn .ftn-articles-total{
    width:284px;
    font-size: 1.5rem;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;

}
.ftn-articles-ctn .ftn-articles-item{
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items:center;
    justify-content: center;
    text-align: center;
    border : 1px solid #e6e6e6;
    border-radius: 5px;
    padding: 1rem;
    margin: 1rem;

    width: 250px;
    height: 250px;
}
</style>

<div class="ftn-articles-ctn">
<?php 

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "SELECT * FROM article WHERE idarticle = :id";
        $req_article = $bdd->prepare($sql);
        $req_article->execute(["id" => $id]);
        if($req_article->rowCount() == 0){
            echo "<h1>$articleNotFound[$lang]</h1>";
        




        }else{
            ?>
        <style>
        .ftn-article{
         
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            margin-top: 2rem;
            width:50%;
        }
        .ftn-article h1{
            
            font-size : 2rem;
           
        }
        .ftn-article p{
            font-size : 1.5rem;
           
        }
        @media screen and (max-width: 1200px) {
     .ftn-article{
        width: 95%;
     }
    }
        
        </style>
            <?php
                    $sql = "SELECT * FROM ecrire WHERE idarticle = :id ORDER BY idarticle DESC";
        $req = $bdd->prepare($sql);
        $req->execute(["id" => $id]);
        $data = $req->fetch();

        $id = $data["idadmin"];
        $sql = "SELECT * FROM utilisateur WHERE idUser = :id";
        $rq = $bdd->prepare($sql);
        $rq->execute(["id" => $id]);

        $data = $rq->fetch();
        $id = $data["idadmin"];

        $nom_admin = $data["nom"];
        $prenom_admin = $data["prenom"];
        
            $article = $req_article->fetch();
            $article_id = $article["idarticle"];
            $titre = $article["titre_".$lang];
            $contenu = $article["contenu_".$lang];
            $date = $article["datecreation"];
            if($contenu == null){
                echo "<h1> We are sorry this article is not available yet in your language : ".$lang."</h1><br>";
                // echo "<h2><a href='article.php?id=$article_id&lang=FR#content'>You may read it in French</a></h2>";
            }
    

            echo "<div class='ftn-article'>";
if(isset($_SESSION["connecte"]) && $_SESSION["connecte"] == "true" && isset($_SESSION["user"]) && isset($_SESSION["isadmin"]) && $_SESSION["isadmin"] == "true" && isset($_GET["id"])){
            echo "<a style='color:red; ' href='article_delete.php?id=$article_id&lang=$lang'>Supprimer article</a>";
}

            echo "<h1> $titre </h1>";
            echo "<p> $contenu </p>";
             echo "<h3>  $nom_admin $prenom_admin, $date   </h3>";



            echo "</div>";
        }

        $article = $req->fetch();


    }else{

?>

     <style>
        .article-titre{
            width:100%;
        }
     </style>
<?php
 $sql = "SELECT * FROM article";
    $result = $bdd->prepare($sql);
    $result->execute();

    if ($result->rowCount() > 0) {
        // output data of each row
        while($row = $result->fetch()) {
            if($row["visible"] == 0){
                continue;
            }
            echo "<style> 
            .article-".$row["idarticle"]."{
                background-image: url('../fichiers/medias/images/articles/".$row["image"]."');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                
            }
            
            
            
            
            </style>";
            echo "<a href='article.php?id=".$row["idarticle"]."&lang=".$lang."'>";
            echo "<div class='ftn-articles-total'>";
            echo "<div class='ftn-articles-item article-".$row["idarticle"]."'>";
            $titre = $row["titre_".$lang];
            if($row["titre_".$lang] == null){
                $titre = $article["titre_FR"];
            }
            echo "</div>
            <div class='article-titre'
            <h3>".$titre."</h3></div>
            </div>";
            echo "</a>";

        }

    } else {
        echo "<h2> Revenez plus tard pour consulter nos articles !</h2>";
    }
    }

?>



</div>


<?php include_once("./teamplates/footer.php"); ?>


    </body>