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
    <h1 id="content"><?php echo ${$currentPage."_h1"}[$lang];?></h1>
<?php
     
if(isset($_POST['login']) && isset($_POST['password'])   && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['lastname'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $dateC = date("Y-m-d");


    if(!(verifier_user($login,$email,$bdd))){
        echo "<h2>".${$currentPage."_alreadyTaken"}[$lang]."</h2>";
    }else{
        $req = $bdd->prepare("INSERT INTO utilisateur (login, motDePasse, email, prenom, nom,dateCreation) VALUES (:login, :password, :email, :name, :lastname, :dateC) returning idUser;");
        $req->bindParam(':login', $login);
        $req->bindParam(':password', $password);
        $req->bindParam(':email', $email);
        $req->bindParam(':name', $name);
        $req->bindParam(':lastname', $lastname);
        $req->bindParam(':dateC', $dateC);
        $req->execute();
        $idUser = $req->fetch();
        $idUser = $idUser['idUser'];
        print_r($req->ErrorInfo());
        $req->closeCursor();
        echo "<h1> $idUser </h1>";
        echo "<h2> Votre compte a été créé avec succès ! </h2>";


    }
}
?>



    <form action="#" method="post" class="connexion_form">
        
        <div>
            <label for="login"><?php echo ${$currentPage."_login"}[$lang];?></label>
            <input type="text" id="login" name="login" placeholder="<?php echo ${$currentPage."_login"}[$lang];?>" required>
        </div>

        <div>
            <label for="email"><?php echo ${$currentPage."_mail"}[$lang];?></label>
            <input type="email" id="email" name="email" placeholder="<?php echo ${$currentPage."_mail"}[$lang];?>" required>
        </div>
        <div>
            <label for="name"><?php echo ${$currentPage."_name"}[$lang];?></label>
            <input type="text" id="name" name="name" placeholder="<?php echo ${$currentPage."_name"}[$lang];?>" required>
        </div>
        <div>     
            <label for="lastname"><?php echo ${$currentPage."_lastname"}[$lang];?></label>
            <input type="text" id="lastname" name="lastname" placeholder="<?php echo ${$currentPage."_lastname"}[$lang];?>" required>
        </div>
        
        <div>
            <label for="password"><?php echo ${$currentPage."_password"}[$lang];?></label>
            <input type="password" id="password" name="password" placeholder="<?php echo ${$currentPage."_password"}[$lang];?>" required>  
        </div>

            <input type="submit" value="<?php echo ${$currentPage."_submit"}[$lang];?>">
            <a href="./register.php"><?php echo ${$currentPage."_createAccount"}[$lang];?></a>
    
    </form>

</main>






<?php include_once("./teamplates/footer.php"); ?>


    </body>