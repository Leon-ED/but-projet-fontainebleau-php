<?php

try {
    $login = "user";
    $mdp = "pass";
    
    $bdd = new PDO('pgsql:host=sqletud.u-pem.fr;dbname=user_db',$login,$mdp);
    // $bdd->exec("SET search_path TO 'unesco';");
}
catch (PDOException $e) {
    echo "ERREUR : La connexion a échouée";
    // echo $e;

}


?>