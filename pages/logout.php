<?php
session_start();
unset($_SESSION["connecte"]);
unset($_SESSION["user"]);
session_destroy();
session_unset();
header("Location: index.php");

?>