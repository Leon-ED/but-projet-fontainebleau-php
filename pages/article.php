<?php
require_once("../include/phpHeader.inc.php");
// Récupère la langue et les textes selon la langue choisie
$currentPage = basename(__FILE__,'.php')."_php";
$fileName = basename(__FILE__,'.php').".php";
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
    justify-content: space-around;
    align-items: center;
    margin-top: 2rem;

}
.ftn-articles-ctn .ftn-articles-total{
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
    justify-content: flex-end;
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
        $req = $bdd->prepare($sql);
        $req->execute(["id" => $id]);
        if($req->rowCount() == 0){
            echo "<h1>$articleNotFound[$lang]</h1>";
        
        ?>
        <style>
        .ftn-articles-ctn{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            margin-top: 2rem;
        }
        </style>

        <?php
        $sql = "SELECT * FROM ecrire WHERE idarticle = :id";
        $req = $bdd->prepare($sql);
        $req->execute(["id" => $id]);
        $data = $req->fetch();
        $id = $data["idadmin"];
        $sql = "SELECT * FROM admin WHERE idadmin = :id";
        $req = $bdd->prepare($sql);
        $req->execute(["id" => $id]);
        $data = $req->fetch();
        $id = $data["idadmin"];
        $nom = $data["nom"];
        $prenom = $data["prenom"];


        }else{
            $article = $req->fetch();
            $titre = $article["titre"];
            $contenu = $article["contenu"];
            $date = $article["datecreation"];
        
    

            echo "<div class='ftn-article'>";
            echo "<h1> $titre </h1>";
            echo "<h3> date : $date , $nom $prenom   </h3>";



            echo "</div>";
        }

        $article = $req->fetch();


    }else{




 $sql = "SELECT * FROM article";
    $result = $bdd->prepare($sql);
    $result->execute();

    if ($result->rowCount() > 0) {
        // output data of each row
        while($row = $result->fetch()) {
            echo "<style> 
            .article-".$row["idarticle"]."{
                background-image: url('../fichiers/medias/images/articles/".$row["image"]."');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 100%;
            }
            
            
            
            </style>";
            echo "<a href='article.php?id=".$row["idarticle"]."'>";
            echo "<div class='ftn-articles-total'>";
            echo "<div class='ftn-articles-item article-".$row["idarticle"]."'>";
            

            echo "</div>
            <h3>".$row["titre"]."</h3>
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