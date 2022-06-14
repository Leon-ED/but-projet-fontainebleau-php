<?php

try {
    $login = "leon.edmee";
    $mdp = "BDDIUT.971";
    
    $bdd = new PDO('pgsql:host=sqletud.u-pem.fr;dbname=leon.edmee_db',$login,$mdp);
    $bdd->exec("SET search_path TO 'unesco';");
}
catch (PDOException $e) {
    echo "ERREUR : La connexion a échouée";
    echo $e;

}


?>