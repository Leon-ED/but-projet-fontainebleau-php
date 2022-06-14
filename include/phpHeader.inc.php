<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once("connexionBase.inc.php");
require_once("fonctions.php");
require_once("lang.php");


?>