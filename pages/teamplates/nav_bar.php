<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    $otherLang = get_other_lang();
require_once("../include/fonctions.php");
require_once("../include/connexionBase.inc.php");
if(isset($_SESSION["connecte"]) && isset($_SESSION["connecte"]) == "true" && isset($_SESSION["user"]) ){
    $sql = "SELECT * FROM admin WHERE idadmin = :idUser";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':idUser', $_SESSION["user"]);;
    $stmt->execute();
    $user = $stmt->fetch();
    if($stmt->rowCount() >= 1){
        $_SESSION["isadmin"] = "true";
        echo "<script>console.log('isadmin');</script>";

    }



    ?>
    <div id='top'>
        <nav class="bloc-navigation">
            <ul class="top-nav" id="content">
                <li><a href="./index.php?lang=<?php echo $lang?>#content"><?php echo $home[$lang] ?></a></li>
                <li><a href="./history.php?lang=<?php echo $lang?>#content"><?php echo $history[$lang] ?></a></li>
                <li><a href="./visit.php?lang=<?php echo $lang?>#content"><?php echo $visit[$lang] ?></a></li>
                <li><a href="./about.php?lang=<?php echo $lang?>#content"><?php echo $about[$lang] ?></a></li>
                <li><a href="./<?php echo $fileName.'?lang='.$otherLang;?>"><?php echo $otherLang?></a></li>
                <div>
                    <li><a href="./account.php?lang=<?php echo $lang?>#content"><?php echo $account[$lang] ?></a></li>
                    <li><a href="./logout.php?lang=<?php echo $lang?>#content"><?php echo $logout[$lang] ?></a></li>
                </div>
                                    <?php
                    if($_SESSION["isadmin"] == "true"){
                        echo "<li><a href='./admin.php?lang=".$lang."#content'>Admin</a></li>";
                    }
                    ?>
            </ul>
        </nav>
    </div>
<?php
}
else{
    $otherLang = get_other_lang();
?>  
    <div id='top'>
        <nav class="bloc-navigation">
            <ul class="top-nav" id="content">
                <li><a href="./index.php?lang=<?php echo $lang?>#content"><?php echo $home[$lang] ?></a></li>
                <li><a href="./history.php?lang=<?php echo $lang?>#content"><?php echo $history[$lang] ?></a></li>
                <li><a href="./visit.php?lang=<?php echo $lang?>#content"><?php echo $visit[$lang] ?></a></li>
                <li><a href="./about.php?lang=<?php echo $lang?>#content"><?php echo $about[$lang] ?></a></li>                
                <li><a href="./<?php echo $fileName.'?lang='.$otherLang;?>"><?php echo $otherLang?></a></li>
                <div>
                    <li><a href="./login.php?lang=<?php echo $lang?>#content"><?php echo $login[$lang] ?></a></li>
                    <li><a href="./register.php?lang=<?php echo $lang?>#content"><?php echo $register[$lang] ?></a></li>
                </div>
            </ul>
        </nav>
    </div>
<?php
}
echo "<?php echo .$currentPage?>";
?>
    
    
