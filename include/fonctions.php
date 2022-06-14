<?php
if(isset($_GET["lang"])){
    if($_GET["lang"] == "FR" || $_GET["lang"] == "EN"){
    $lang = $_GET["lang"];
}
}else{
    $lang = "FR";
}



function get_current_lang(){
    if(isset($_SESSION["lang"])){
        return $_SESSION["lang"];
    }
    if(isset($_GET["lang"])){
        change_lang($_GET["lang"]);
        return $_GET["lang"];
    }
    return "FR";

}

function get_other_lang(){
    if(isset($_GET["lang"])){
        if($_GET["lang"] == "FR"){
            return "EN";
        }
        if($_GET["lang"] == "EN"){
            return "FR";
        }
    }


    return "EN";
}

function change_lang($lang_new){
    $_SESSION["lang"] = $lang_new;
    echo $_SESSION["lang"];
}


function connexion($login,$password,$bdd){
    // require_once("connexionBase.inc.php");
    // $test = $bdd->query("SELECT * FROM article;");
    
    if(verifier_user($login,$login,$bdd)){
        print_r($resultat);
        return false;
        }
    $sql = "SELECT * FROM utilisateur WHERE login LIKE :login OR email LIKE :login;";
    $req = $bdd->prepare($sql);
    $req->bindParam(":login",$login);
    $req->execute();
    $resultat = $req->fetchAll()[0];
    $req->closeCursor();
    
    if(password_verify($password,$resultat["motdepasse"])){
        $_SESSION["user"] = $resultat["iduser"];
        $_SESSION["connecte"] = "true";
        return true;
    }
    return false;  

}

function verifier_user($login,$email,$bdd){
    $sql = "SELECT * FROM utilisateur WHERE login LIKE :login OR email LIKE :email;";
    $req = $bdd->prepare($sql);
    $req->bindParam(":login",$login);
    $req->bindParam(":email",$email);
    $req->execute();
    $compte = $req->rowCount();
    if($compte >= 1){
        return false;
    }
    return true;


}

function creation_compte($login,$email,$password,$name,$lastname,$bdd){
    $sql = "INSERT INTO users (login,email,password,name,lastname) VALUES (:login,:email,:password,:name,:lastname) returning idUser;";
    $req = $bdd->prepare($sql);

    $req->bindParam(":login",$login);
    $req->bindParam(":email",$email);
    $req->bindParam(":password",$password);
    $req->bindParam(":name",$name);
    $req->bindParam(":lastname",$lastname);
    $req->execute();
    $result = $req->fetch();
    $_SESSION["user"] = $result["idUser"];
    return true;




}
?>